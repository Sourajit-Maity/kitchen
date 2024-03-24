<?php

namespace App\Http\Livewire\Admin\Cms;

use Livewire\Component;
use App\Models\Footer;
use Livewire\WithPagination;
use App\Http\Livewire\Traits\WithSorting;
use App\Http\Livewire\Traits\AlertMessage;

class FooterList extends Component
{
    use WithPagination;
    use WithSorting;
    use AlertMessage;
    public $perPageList = [];
    public $badgeColors = ['info', 'success', 'brand', 'dark', 'primary', 'warning'];


    protected $paginationTheme = 'bootstrap';

    public $searchEmail,$searchLogo, $searchPhone,$searchCopyright,$searchTermscondition,  $searchDelete = -1, $perPage = 5;
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
        $this->searchEmail = "";
        $this->searchPhone = "";
        $this->searchCopyright = "";
        $this->searchTermscondition = "";
        $this->searchLogo = "";
    }

    public function render()
    {
        $footerQuery = Footer::query();
        if ($this->searchEmail)
            $footerQuery->where('email', 'like', '%' . $this->searchEmail . '%');
        if ($this->searchPhone)
            $footerQuery->where('phone', 'like', '%' . $this->searchPhone . '%');
        if ($this->searchCopyright)
            $footerQuery->where('copyright', 'like', '%' . $this->searchCopyright . '%');
        if ($this->searchTermscondition)
            $footerQuery->where('terms_condition', 'like', '%' . $this->searchTermscondition . '%');
        if ($this->searchLogo)
            $footerQuery->where('logo', 'like', '%' . $this->searchLogo . '%');

        return view('livewire.admin.cms.footer-list', [
            'footers' => $footerQuery
                ->orderBy($this->sortBy, $this->sortDirection) 
                ->paginate($this->perPage)
        ]);
    }
    public function deleteConfirm($id)
    {
        Footer::destroy($id);
        $this->showModal('success', 'Success', 'Header has been deleted successfully');
    }
    public function deleteAttempt($id)
    {
        $this->showConfirmation("warning", 'Are you sure?', "Do you want to change this?", 'Yes, change!', 'deleteConfirm', ['id' => $id]); //($type,$title,$text,$confirmText,$method)
    }

    public function changeStatusConfirm($id) 
    {
        $this->showConfirmation("warning", 'Are you sure?', "Do you want to change this status?", 'Yes, Change!', 'changeStatus', ['id' => $id]); //($type,$title,$text,$confirmText,$method)
    }

}


