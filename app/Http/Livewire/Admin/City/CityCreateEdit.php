<?php

namespace App\Http\Livewire\Admin\City;

use Livewire\Component;
use Illuminate\Validation\Rule;
use App\Http\Livewire\Traits\AlertMessage;
use App\Models\State;
use App\Models\City;

class CityCreateEdit extends Component
{
    use AlertMessage;
    public $city_name, $city, $state_id, $blankArr;
    public $isEdit=false;
    public $states = [];

    public function mount($city = null)
    {
        if ($city) {
            $this->city = $city;
            $this->fill($this->city);
            $this->isEdit=true;
        }
        else
            $this->city=new City;

        $this->states = State::get();
        $this->blankArr = [
            "value"=> "", "text"=> "== Select One =="
        ];


    }

    public function validationRuleForSave(): array
    {
        return
            [
                'city_name' => ['required', 'max:255', Rule::unique('cities')],
                'state_id' => ['required'],
            ];
    }

    public function validationRuleForUpdate(): array
    {
        return
            [   
                'city_name' => ['required', 'max:255', Rule::unique('cities')->ignore($this->city->id)],
                'state_id' => ['required'],
            ];
    }

    protected $messages = [
        'state_id.required' => "The State field is required",
    ];

    public function saveOrUpdate()
    {
        $this->city->fill($this->validate($this->isEdit ? $this->validationRuleForUpdate() : $this->validationRuleForSave()))->save();
        
        $msgAction = 'City is '. ($this->isEdit ? 'updated' : 'added') . ' successfully';
        $this->showToastr("success",$msgAction);

        return redirect()->route('city.index');
    }


    public function render()
    {
        return view('livewire.admin.city.city-create-edit');
    }

}

