<?php

namespace App\Http\Livewire\Admin\City;

use App\Http\Livewire\Traits\AlertMessage;
use Livewire\Component;
use App\Models\City;
use Livewire\WithPagination;
use App\Http\Livewire\Traits\WithSorting;

class CityList extends Component
{
    use WithPagination;
    use WithSorting;
    use AlertMessage;
    public $perPageList = [];
    public $badgeColors = ['info', 'success', 'brand', 'dark', 'primary', 'warning'];


    protected $paginationTheme = 'bootstrap';

    public $searchLocation, $searchStatus = -1, $perPage = 5;
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
        $this->searchLocation = "";
        $this->searchStatus = -1;
    }

    public function render()
    {
        $locationQuery = City::query();
        if ($this->searchLocation)
            $locationQuery->where('city_name', 'like', '%' . $this->searchLocation . '%');
        if ($this->searchStatus >= 0)
            $locationQuery->orWhere('active', $this->searchStatus);
        return view('livewire.admin.city.city-list', [
            'cities' => $locationQuery
                ->orderBy($this->sortBy, $this->sortDirection)
                ->paginate($this->perPage)
        ]);
    }
    public function deleteConfirm($id)
    {
        City::destroy($id);
        $this->showModal('success', 'Success', 'City is deleted successfully');
    }
    public function deleteAttempt($id)
    {
        $this->showConfirmation("warning", 'Are you sure?', "Do you want to change this?", 'Yes, Delete!', 'deleteConfirm', ['id' => $id]); //($type,$title,$text,$confirmText,$method)
    }

    public function changeStatusConfirm($id)
    {
        $this->showConfirmation("warning", 'Are you sure?', "Do you want to change this status?", 'Yes, Change!', 'changeStatus', ['id' => $id]); //($type,$title,$text,$confirmText,$method)
    }

    public function changeStatus(City $city)
    {
        $city->fill(['active' => ($city->active == 1) ? 0 : 1])->save();
 
        $this->showModal('success', 'Success', 'City status is changed successfully');
    }
}
