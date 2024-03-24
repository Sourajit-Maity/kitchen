<?php

namespace App\Http\Livewire\Admin\FaqMaster;

use Livewire\Component;
use Illuminate\Validation\Rule;
use App\Http\Livewire\Traits\AlertMessage;
use App\Models\FaqMaster; 

class FaqMasterCreateEdit extends Component
{
    use AlertMessage;
    public $faq_question,$faq_answer, $faqMaster;
    public $isEdit=false;

    public function mount($faqMaster = null)
    {
        if ($faqMaster) {
            $this->faqMaster = $faqMaster;
            $this->fill($this->faqMaster);
            $this->isEdit=true;
        }
        else
            $this->faqMaster=new FaqMaster;

    }

    public function validationRuleForSave(): array
    {
        return
            [
                'faq_question' => ['required', 'max:255', Rule::unique('faq_masters')],
                'faq_answer' => ['required'],
                
            ];
    }

    public function validationRuleForUpdate(): array
    {
        return
            [   
                'faq_question' => ['required', 'max:255', Rule::unique('faq_masters')->ignore($this->faqMaster->id)],
                'faq_answer' => ['required'],
                
            ];
    }

    public function saveOrUpdate()
    {
        $this->faqMaster->fill($this->validate($this->isEdit ? $this->validationRuleForUpdate() : $this->validationRuleForSave()))->save();
        
        $msgAction = 'FAQ is '. ($this->isEdit ? 'updated' : 'added') . ' successfully';
        $this->showToastr("success",$msgAction);

        return redirect()->route('faq-master.index');
    }

    public function render()
    {
        return view('livewire.admin.faq-master.faq-master-create-edit');
    }
}

