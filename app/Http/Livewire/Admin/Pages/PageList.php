<?php

namespace App\Http\Livewire\Admin\Pages;

use App\Http\Livewire\Traits\AlertMessage;
use Livewire\Component;
use App\Models\Cms;
use App\Models\Pages;
use Livewire\WithPagination;
use App\Http\Livewire\Traits\WithSorting;
class PageList extends Component
{
    use WithPagination;
    use WithSorting;
    use AlertMessage;
    public $perPageList = []; 
    public $badgeColors = ['info', 'success', 'brand', 'dark', 'primary', 'warning']; 
    protected $paginationTheme = 'bootstrap';

    public $searchName, $searchStatus = -1, $searchDelete = -1, $perPage = 5;
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
        
        $CmsQuery = Pages::query();
        if ($this->searchName)
        $CmsQuery->orWhere('name', 'like', '%' . $this->searchName . '%');
        return view('livewire.admin.pages.page-list',
            [
                'pages' => $CmsQuery
                ->orderBy($this->sortBy, $this->sortDirection) 
                ->paginate($this->perPage)
            ] 
        );
    }
}
