<?php

namespace App\Http\Livewire\Admin\PaymentPercentage;;

use Livewire\Component;
use Illuminate\Validation\Rule;
use App\Http\Livewire\Traits\AlertMessage;
use App\Models\PaymentPercentage;

class PaymentPercentageCreateEdit extends Component
{
    use AlertMessage;
    public $payment_name,$payment_percentage, $paymentPercentage;
    public $isEdit=false;

    public function mount($paymentPercentage = null)
    {
        if ($paymentPercentage) {
            $this->paymentPercentage = $paymentPercentage;
            $this->fill($this->paymentPercentage);
            $this->isEdit=true;
        }
        else
            $this->paymentPercentage=new PaymentPercentage;

    }

    public function validationRuleForSave(): array
    {
        return
            [
                'payment_name' => ['required', 'max:255', Rule::unique('payment_percentages')],
                'payment_percentage' => ['required'],
                
            ];
    }

    public function validationRuleForUpdate(): array
    {
        return
            [   
                'payment_name' => ['required', 'max:255', Rule::unique('payment_percentages')->ignore($this->paymentPercentage->id)],
                'payment_percentage' => ['required'],
            ];
    }

    public function saveOrUpdate()
    {
        $this->paymentPercentage->fill($this->validate($this->isEdit ? $this->validationRuleForUpdate() : $this->validationRuleForSave()))->save();
        
        $msgAction = 'Payment Percentage is '. ($this->isEdit ? 'updated' : 'added') . ' successfully';
        $this->showToastr("success",$msgAction);

        return redirect()->route('payment-percentage.index');
    }

    public function render()
    {
        return view('livewire.admin.payment-percentage.payment-percentage-create-edit');
    }
}


