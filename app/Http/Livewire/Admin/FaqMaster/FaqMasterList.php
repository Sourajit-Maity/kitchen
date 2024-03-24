<?php

namespace App\Http\Livewire\Admin\FaqMaster;

use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithPagination;
use App\Http\Livewire\Traits\WithSorting;
use App\Http\Livewire\Traits\AlertMessage;
use App\Models\FaqMaster;

class FaqMasterList extends Component 
{
    use WithPagination;
    use WithSorting;
    use AlertMessage;
    public $perPageList = [];
    public $badgeColors = ['info', 'success', 'brand', 'dark', 'primary', 'warning'];


    protected $paginationTheme = 'bootstrap';

    public $searchQuestion,$searchAnswer, $searchStatus = -1, $perPage = 5;
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
        $this->searchQuestion = "";
        $this->searchAnswer = "";
        $this->searchStatus = -1;
    }

    public function render()
    {
        $faqMasterQuery = FaqMaster::query();
        if ($this->searchQuestion)
            $faqMasterQuery->Where('faq_question', 'like', '%' . $this->searchQuestion . '%');
        if ($this->searchAnswer)
            $faqMasterQuery->Where('faq_answer', 'like', '%' . $this->searchAnswer . '%');
        if ($this->searchStatus >= 0)
            $faqMasterQuery->orWhere('active', $this->searchStatus);
        return view('livewire.admin.faq-master.faq-master-list', [
            'faqMasters' => $faqMasterQuery
                ->orderBy($this->sortBy, $this->sortDirection)
                ->paginate($this->perPage)
        ]);
    }
    public function deleteConfirm($id)
    {
        FaqMaster::destroy($id);
        $this->showModal('success', 'Success', 'FAQ is deleted successfully');
    }
    public function deleteAttempt($id)
    {
        $this->showConfirmation("warning", 'Are you sure?', "Do you want to change this?", 'Yes, Change!', 'deleteConfirm', ['id' => $id]); //($type,$title,$text,$confirmText,$method)
    }

    public function changeStatusConfirm($id)
    {
        $this->showConfirmation("warning", 'Are you sure?', "Do you want to change this status?", 'Yes, Change!', 'changeStatus', ['id' => $id]); //($type,$title,$text,$confirmText,$method)
    }

    public function changeStatus(FaqMaster $faqmaster)
    {
        $faqmaster->fill(['active' => ($faqmaster->active == 1) ? 0 : 1])->save();
       
        $this->showModal('success', 'Success', 'FAQ status is changed successfully');
    }
}

