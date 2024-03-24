<?php

namespace App\Http\Livewire\Admin\RecipeCategory;

use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithPagination;
use App\Http\Livewire\Traits\WithSorting;
use App\Http\Livewire\Traits\AlertMessage;
use App\Models\RecipeCategory;

class RecipeList extends Component
{
    use WithPagination;
    use WithSorting;
    use AlertMessage;
    public $perPageList = [];
    public $badgeColors = ['info', 'success', 'brand', 'dark', 'primary', 'warning'];


    protected $paginationTheme = 'bootstrap';

    public $searchCategory, $searchStatus = -1, $perPage = 5;
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
        $this->searchCategory = "";
        $this->searchStatus = -1;
    }

    public function render()
    {
        $recipeCategoryQuery = RecipeCategory::query();
        if ($this->searchCategory)
            $recipeCategoryQuery->Where('recipe_category', 'like', '%' . $this->searchCategory . '%');
        if ($this->searchStatus >= 0)
            $recipeCategoryQuery->orWhere('active', $this->searchStatus);
        return view('livewire.admin.recipe-category.recipe-list', [
            'recipeCategories' => $recipeCategoryQuery
                ->orderBy($this->sortBy, $this->sortDirection)
                ->paginate($this->perPage)
        ]);
    }
    public function deleteConfirm($id)
    {
        RecipeCategory::destroy($id);
        $this->showModal('success', 'Success', 'Recipe category is deleted successfully');
    }
    public function deleteAttempt($id)
    {
        $this->showConfirmation("warning", 'Are you sure?', "Do you want to change this?", 'Yes, Change!', 'deleteConfirm', ['id' => $id]); //($type,$title,$text,$confirmText,$method)
    }

    public function changeStatusConfirm($id)
    {
        $this->showConfirmation("warning", 'Are you sure?', "Do you want to change this status?", 'Yes, Change!', 'changeStatus', ['id' => $id]); //($type,$title,$text,$confirmText,$method)
    }

    public function changeStatus(RecipeCategory $recipecategory)
    {
        $recipecategory->fill(['active' => ($recipecategory->active == 1) ? 0 : 1])->save();
      
        $this->showModal('success', 'Success', 'Recipe Category status is changed successfully');
    }
}

