<?php

namespace App\Http\Livewire\Admin\Cms;

use Livewire\Component;
use Illuminate\Validation\Rule;
use App\Http\Livewire\Traits\AlertMessage;
use App\Models\Footer;
use Livewire\WithFileUploads;

class FooterCreateEdit extends Component
{
    use AlertMessage;
    use WithFileUploads;
    public $email,$phone,$address,$copyright,$terms_condition,$logo,$footer;
    public $isEdit=false;

    public function mount($footer = null)
    {
        if ($footer) {
            $this->footer = $footer;
            $this->fill($this->footer);
            $this->isEdit=true;
        }
        else
            $this->footer=new Footer;

    }

    public function validationRuleForSave(): array
    {
        return
            [
                'email' => ['required','email', 'max:255', Rule::unique('footers')],
                'phone' => ['required', 'max:255', Rule::unique('footers')],
                'address' => ['required', 'max:255', Rule::unique('footers')],
                'copyright' => ['required', 'max:255', Rule::unique('footers')],
                'terms_condition' => ['required', 'max:255', Rule::unique('footers')],
                "logo"  =>  "required|image:jpeg,png,jpg,gif,svg|max:2048",
                
            ];
    }

    public function validationRuleForUpdate(): array
    {
        return
            [   
                'email' => ['required','email', 'max:255', Rule::unique('footers')->ignore($this->footer->id)],
                'phone' => ['required', 'max:255',Rule::unique('footers')->ignore($this->footer->id)],
                'address' => ['required', 'max:255', Rule::unique('footers')->ignore($this->footer->id)],
                'copyright' => ['required', 'max:255', Rule::unique('footers')->ignore($this->footer->id)],
                'terms_condition' => ['required', 'max:255', Rule::unique('footers')->ignore($this->footer->id)],
                
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
                $this->footer->logo = "attachFile/" . $name;
            }
        }

        $this->footer->fill($this->validate($this->isEdit ? $this->validationRuleForUpdate() : $this->validationRuleForSave()))->save();
        
        $msgAction = 'Footer was '. ($this->isEdit ? 'updated' : 'added') . ' successfully';
        $this->showToastr("success",$msgAction);

        return redirect()->route('footer.index');
    }

    public function render()
    {
        return view('livewire.admin.cms.footer-create-edit');
    }
}
 
