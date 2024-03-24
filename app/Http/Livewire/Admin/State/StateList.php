<?php

namespace App\Http\Livewire\Admin\State;

use Livewire\Component;
use Livewire\WithPagination;
use App\Http\Livewire\Traits\WithSorting;
use App\Http\Livewire\Traits\AlertMessage;
use App\Models\State;

class StateList extends Component
{
    use WithPagination;
    use WithSorting;
    use AlertMessage;
    public $perPageList = [];
    public $badgeColors = ['info', 'success', 'brand', 'dark', 'primary', 'warning'];


    protected $paginationTheme = 'bootstrap';

    public $searchName, $searchStatus = -1, $perPage = 5;
    protected $listeners = ['deleteConfirm', 'changeStatus'];

    public function mount()
    {
        $this->perPageList = [
            ['value' => 5, 'text' => "5"],
            ['value' => 10, 'text' => "10"],
            ['value' => 20, 'text' => "20"],
            ['value' => 50, 'text' => "50"],
            ['value' => 100, 'text' => "100"]
        ];
    } 
    public function getRandomColor()
    {
        $arrIndex = array_rand($this->badgeColors);
        return $this->badgeColors[$arrIndex];
    }

    public function updatingPerPage()
    {
        $this->resetPage();
    }

    public function search() 
    {
        $this->resetPage();
    }
    public function resetSearch()
    {
        $this->searchName = "";
        $this->searchStatus = -1;
    }

    public function render()
    {
         $stateQuery = State::query();
        if ($this->searchName)
            $stateQuery->where('state_name', 'like', '%' . $this->searchName . '%');
        if ($this->searchStatus >= 0)
            $stateQuery->orWhere('active', $this->searchStatus);
        return view('livewire.admin.state.state-list', [
            'states' => $stateQuery
                ->orderBy($this->sortBy, $this->sortDirection)
                ->paginate($this->perPage)
        ]);
    } 
    public function deleteConfirm($id)
    {
        State::destroy($id);
        $this->showModal('success', 'Success', 'State is deleted successfully');
    }
    public function deleteAttempt($id)
    {
        $this->showConfirmation("warning", 'Are you sure?', "Do you want to change this?", 'Yes, Delete!', 'deleteConfirm', ['id' => $id]); //($type,$title,$text,$confirmText,$method)
    }

    public function changeStatusConfirm($id)
    {
        $this->showConfirmation("warning", 'Are you sure?', "Do you want to change this status?", 'Yes, Change!', 'changeStatus', ['id' => $id]); //($type,$title,$text,$confirmText,$method)
    }

    public function changeStatus(State $state)
    {
        $state->fill(['active' => ($state->active == 1) ? 0 : 1])->save();
     
        $this->showModal('success', 'Success', 'State status is changed successfully');
    }
}
