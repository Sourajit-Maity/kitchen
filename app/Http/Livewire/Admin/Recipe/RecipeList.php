<?php

namespace App\Http\Livewire\Admin\Recipe;

use App\Http\Livewire\Traits\AlertMessage;
use App\Models\User;
use App\Models\Recipe;
use App\Models\RecipeCategory;
use Livewire\Component;
use Livewire\WithPagination;
use App\Http\Livewire\Traits\WithSorting;

class RecipeList extends Component
{
    use WithPagination;
    use WithSorting;
    use AlertMessage;
    public $perPageList = [];
    public $badgeColors = ['info', 'success', 'brand', 'dark', 'primary', 'warning'];


    protected $paginationTheme = 'bootstrap';

    public $searchName, $searchDescription, $searchRecipeCategory, $searchAddedbyname,  $searchStatus = -1, $perPage = 5;
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
        $this->searchDescription = "";
        $this->searchRecipeCategory = "";
        $this->searchAddedbyname = "";
        $this->searchStatus = -1;
    }

    public function render()
    {
        $recipeQuery = Recipe::query();
        if ($this->searchName)
            $recipeQuery->orWhere('recipe_name', 'like', '%' . $this->searchName . '%');
        if ($this->searchRecipeCategory) {
                $category_name = RecipeCategory::Where('recipe_category', 'like', '%' . $this->searchRecipeCategory . '%')->get();
                foreach ($category_name as $value) {
                    $recipeQuery->orWhere('recipe_category_id', $value->id);
                 }
             }  
        if ($this->searchAddedbyname) {
                $user_name = User::Where('first_name', 'like', '%' . $this->searchAddedbyname . '%')->get();
                foreach ($user_name as $value) {
                    $recipeQuery->orWhere('added_by_id', $value->id);
                 }
             }       
        if ($this->searchDescription)
            $recipeQuery->orWhere('recipe_description', 'like', '%' . $this->searchDescription . '%');
        if ($this->searchStatus >= 0)
            $recipeQuery->orWhere('active', $this->searchStatus);
        return view('livewire.admin.recipe.recipe-list', [ 
            'recipies' => $recipeQuery
                ->orderBy($this->sortBy, $this->sortDirection)
                ->paginate($this->perPage)
        ]);
    }
    public function deleteConfirm($id)
    {
        Recipe::destroy($id);
        $this->showModal('success', 'Success', 'Recipe is deleted successfully');
    }
    public function deleteAttempt($id)
    {
        $this->showConfirmation("warning", 'Are you sure?', "You won't be able to recover this member!", 'Yes, delete!', 'deleteConfirm', ['id' => $id]); //($type,$title,$text,$confirmText,$method)
    }

    public function changeStatusConfirm($id)
    {
        $this->showConfirmation("warning", 'Are you sure?', "Do you want to change this status?", 'Yes, Change!', 'changeStatus', ['id' => $id]); //($type,$title,$text,$confirmText,$method)
    }

    public function changeStatus(Recipe $recipe)
    {
        $recipe->fill(['active' => ($recipe->active == 1) ? 0 : 1])->save();
       
        $this->showModal('success', 'Success', 'Recipe status is changed successfully');
    }
}
