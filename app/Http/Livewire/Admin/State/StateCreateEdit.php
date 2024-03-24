<?php

namespace App\Http\Livewire\Admin\State; 

use Livewire\Component;
use Illuminate\Validation\Rule;
use App\Http\Livewire\Traits\AlertMessage;
use App\Models\Country;
use App\Models\State;


class StateCreateEdit extends Component
{
    use AlertMessage;
    public $state_name, $state, $country_id, $blankArr;
    public $isEdit=false;
    public $countries = [];

    public function mount($state = null)
    {
        if ($state) {
            $this->state = $state;
            $this->fill($this->state);
            $this->isEdit=true;
        }
        else
            $this->state=new State;

    $this->countries = Country::get();
    $this->blankArr = [
        "value"=> "", "text"=> "== Select One =="
    ];


}

public function validationRuleForSave(): array
{
    return
        [
            'state_name' => ['required', 'max:255', Rule::unique('states')],
            'country_id' => ['required'],
        ];
}

public function validationRuleForUpdate(): array
{
    return
        [   
            'state_name' => ['required', 'max:255', Rule::unique('states')->ignore($this->state->id)],
            'country_id' => ['required'],
        ];
}

public function saveOrUpdate()
{

    $this->state->fill($this->validate($this->isEdit ? $this->validationRuleForUpdate() : $this->validationRuleForSave()))->save();
    
    $msgAction = 'State is '. ($this->isEdit ? 'updated' : 'added') . ' successfully';
    $this->showToastr("success",$msgAction);

    return redirect()->route('state.index');
}

    public function render()
    {
        return view('livewire.admin.state.state-create-edit');
    }
}
