<?php

namespace App\Http\Livewire\Admin\PaymentPercentage;

use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithPagination;
use App\Http\Livewire\Traits\WithSorting;
use App\Http\Livewire\Traits\AlertMessage;
use App\Models\PaymentPercentage;

class PaymentPercentageList extends Component
{
    use WithPagination;
    use WithSorting;
    use AlertMessage;
    public $perPageList = [];
    public $badgeColors = ['info', 'success', 'brand', 'dark', 'primary', 'warning'];


    protected $paginationTheme = 'bootstrap';

    public $searchPaymentName,$searchPaymentPercentage, $searchStatus = -1, $perPage = 5;
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
        $this->searchPaymentName = "";
        $this->searchPaymentPercentage = "";
        $this->searchStatus = -1;
    }

    public function render()
    {
        $paymentpercentageQuery = PaymentPercentage::query();
        if ($this->searchPaymentName)
            $paymentpercentageQuery->Where('payment_name', 'like', '%' . $this->searchPaymentName . '%');
        if ($this->searchPaymentPercentage)
            $paymentpercentageQuery->Where('payment_percentage', 'like', '%' . $this->searchPaymentPercentage . '%');
        if ($this->searchStatus >= 0)
            $paymentpercentageQuery->orWhere('active', $this->searchStatus);
        return view('livewire.admin.payment-percentage.payment-percentage-list', [
            'paymentPercentages' => $paymentpercentageQuery
                ->orderBy($this->sortBy, $this->sortDirection)
                ->paginate($this->perPage)
        ]);
    }
    public function deleteConfirm($id)
    {
        PaymentPercentage::destroy($id);
        $this->showModal('success', 'Success', 'Payment percentage is deleted successfully');
    }
    public function deleteAttempt($id)
    {
        $this->showConfirmation("warning", 'Are you sure?', "Do you want to change this?", 'Yes, Change!', 'deleteConfirm', ['id' => $id]); //($type,$title,$text,$confirmText,$method)
    }

    public function changeStatusConfirm($id)
    {
        $this->showConfirmation("warning", 'Are you sure?', "Do you want to change this status?", 'Yes, Change!', 'changeStatus', ['id' => $id]); //($type,$title,$text,$confirmText,$method)
    }

    public function changeStatus(PaymentPercentage $paymentpercentage)
    {
        $paymentpercentage->fill(['active' => ($paymentpercentage->active == 1) ? 0 : 1])->save();
      
        $this->showModal('success', 'Success', 'Payment percentage status is changed successfully');
    }
}

