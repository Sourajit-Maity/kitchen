<?php

namespace App\Http\Livewire\Admin\Cms;

use Livewire\Component;
use Illuminate\Validation\Rule;
use App\Http\Livewire\Traits\AlertMessage;
use App\Models\Header;
use Livewire\WithFileUploads;

class HeaderCreateEdit extends Component
{
    use AlertMessage;
    use WithFileUploads;
    public $slogan,$logo,$header;
    public $isEdit=false;

    public function mount($header = null)
    {
        if ($header) {
            $this->header = $header;
            $this->fill($this->header);
            $this->isEdit=true;
        }
        else
            $this->header=new Header;

    }

    public function validationRuleForSave(): array
    {
        return
            [
                'slogan' => ['required', 'max:255', Rule::unique('headers')],
                "logo"  =>  "required|image:jpeg,png,jpg,gif,svg|max:2048",
                
            ];
    }

    public function validationRuleForUpdate(): array
    {
        return
            [   
                'slogan' => ['required', 'max:255', Rule::unique('headers')->ignore($this->header->id)],
                
            ];
    }

    protected $messages = [
        'logo.required' => 'Logo Image field is required.',
       
    ];

    public function saveOrUpdate()
    {
        if ($this->logo) {
            if (!is_string($this->logo)) {
                $this->validate([
                    'logo' => ['mimes:jpg,jpeg,png'],
                ],[
                    'logo.mimes' => 'Image must be jpeg,jpg or png type.',
                ]);
                $name = md5($this->logo . microtime()) . '.' . $this->logo->extension();
                $this->logo->storeAs("attachFile", $name, "public");
                $this->header->logo = "attachFile/" . $name;
            }
        }

        $this->header->fill($this->validate($this->isEdit ? $this->validationRuleForUpdate() : $this->validationRuleForSave()))->save();
        
        $msgAction = 'Header was '. ($this->isEdit ? 'updated' : 'added') . ' successfully';
        $this->showToastr("success",$msgAction);

        return redirect()->route('header.index');
    }

    public function render()
    {
        return view('livewire.admin.cms.header-create-edit');
    }
}
 