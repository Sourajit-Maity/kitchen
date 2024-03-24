<?php

namespace App\Http\Livewire\Admin\Recipe;

use App\Http\Livewire\Traits\AlertMessage;
use App\Models\Recipe;
use App\Models\RecipeCategory;
use App\Models\User;
use Livewire\Component;
use Illuminate\Validation\Rule;
use Livewire\WithFileUploads;
use Spatie\MediaLibrary\Models\Media;

class RecipeCreateEdit extends Component
{
    use WithFileUploads;
    use AlertMessage;
    public $recipe_name, $recipe_description, $recipe_category_id, $added_by_id, $blankArr, $active, $recipe;
    public $isEdit = false;
    public $statusList = [];
    public $recipecategory = [];
    protected $listeners = ['refreshProducts' => '$refresh'];

    public function mount($recipe = null)
    {
        if ($recipe) {
            $this->recipe = $recipe;
            $this->fill($this->recipe);
            $this->isEdit = true;
        } else
            $this->recipe = new Recipe;

            $this->recipecategory = RecipeCategory::get();
            $this->blankArr = [
                "value"=> "", "text"=> "== Select One =="
            ];

        $this->statusList = [
            ['value' => 0, 'text' => "Choose Status"],
            ['value' => 1, 'text' => "Active"],
            ['value' => 0, 'text' => "Inactive"]
        ];
     
    }

    public function validationRuleForSave(): array
    {
        return
            [
                'recipe_category_id' => ['required'],
                'recipe_description' => ['required', 'max:255'],
                'recipe_name' => ['required', Rule::unique('recipes')],
                'active' => ['required'],


            ];
    }
    public function validationRuleForUpdate(): array
    {
        return
            [
                'recipe_category_id' => ['required'],
                'recipe_description' => ['required', 'max:255'],
                'active' => ['required'],
                'recipe_name' => ['required', Rule::unique('recipes')->ignore($this->recipe->id)],
            ];
    }

    public function saveOrUpdate()
    {
        $this->isEdit ? $this->recipe->added_by_id = auth()->user()->id : $this->recipe->added_by_id = auth()->user()->id;

        $this->recipe->fill($this->validate($this->isEdit ? $this->validationRuleForUpdate() : $this->validationRuleForSave()))->save();
        
        $msgAction = 'Recipe is '. ($this->isEdit ? 'updated' : 'added') . ' successfully';
        $this->showToastr("success",$msgAction);

        return redirect()->route('recipe.index');
    }

    public function render()
    {
        return view('livewire.admin.recipe.recipe-create-edit');
    }
}
