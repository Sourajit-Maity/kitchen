<?php

namespace App\Http\Livewire\Admin\RecipeCategory;

use Livewire\Component;
use Illuminate\Validation\Rule;
use App\Http\Livewire\Traits\AlertMessage;
use App\Models\RecipeCategory; 
 
class RecipeCreateEdit extends Component
{
    use AlertMessage;
    public $recipe_category, $recipeCategory;
    public $isEdit=false;

    public function mount($recipeCategory = null)
    {
        if ($recipeCategory) {
            $this->recipeCategory = $recipeCategory;
            $this->fill($this->recipeCategory);
            $this->isEdit=true;
        }
        else
            $this->recipeCategory=new RecipeCategory;

    }

    public function validationRuleForSave(): array
    {
        return
            [
                'recipe_category' => ['required', 'max:255', Rule::unique('recipe_categories')],
                
            ];
    }

    public function validationRuleForUpdate(): array
    {
        return
            [   
                'recipe_category' => ['required', 'max:255', Rule::unique('recipe_categories')->ignore($this->recipeCategory->id)],
                
            ];
    }

    public function saveOrUpdate()
    {
        $this->recipeCategory->fill($this->validate($this->isEdit ? $this->validationRuleForUpdate() : $this->validationRuleForSave()))->save();
        
        $msgAction = 'Recipe category is '. ($this->isEdit ? 'updated' : 'added') . ' successfully';
        $this->showToastr("success",$msgAction);

        return redirect()->route('categoryrecipe.index');
    }

    public function render()
    {
        return view('livewire.admin.recipe-category.recipe-create-edit');
    }
}

