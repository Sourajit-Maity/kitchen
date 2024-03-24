<?php

namespace App\Http\Livewire\Admin\Country;

use Livewire\Component;
use Illuminate\Validation\Rule;
use App\Http\Livewire\Traits\AlertMessage;
use App\Models\Country;

class CountryCreateEdit extends Component
{
    use AlertMessage;
    public $country_name, $country;
    public $isEdit=false;

    public function mount($country = null)
    {
        if ($country) {
            $this->country = $country;
            $this->fill($this->country);
            $this->isEdit=true;
        }
        else
            $this->country=new Country;

    }

    public function validationRuleForSave(): array
    {
        return
            [
                'country_name' => ['required', 'max:255', Rule::unique('countries')],
            ];
    }

    public function validationRuleForUpdate(): array
    {
        return
            [   
                'country_name' => ['required', 'max:255', Rule::unique('countries')->ignore($this->country->id)],
            ];
    }

    public function saveOrUpdate()
    {
        $this->country->fill($this->validate($this->isEdit ? $this->validationRuleForUpdate() : $this->validationRuleForSave()))->save();
        
        $msgAction = 'Country is '. ($this->isEdit ? 'updated' : 'added') . ' successfully';
        $this->showToastr("success",$msgAction);

        return redirect()->route('country.index');
    }

    public function render()
    {
        return view('livewire.admin.country.country-create-edit');
    }
}
