<?php

namespace App\Http\Livewire\Admin\Member;

use App\Http\Livewire\Traits\AlertMessage;
use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;
use App\Http\Livewire\Traits\WithSorting;

class MemberList extends Component
{
    use WithPagination;
    use WithSorting;
    use AlertMessage;
    public $perPageList = [];
    public $badgeColors = ['info', 'success', 'brand', 'dark', 'primary', 'warning'];


    protected $paginationTheme = 'bootstrap';

    public $searchName, $searchEmail, $searchPhone, $searchStatus = -1, $perPage = 5;
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
        $this->searchName = "";
        $this->searchEmail = "";
        $this->searchPhone = "";
        $this->searchStatus = -1;
    }

    public function render()
    {
        $userQuery = User::query();
        if ($this->searchName)
            $userQuery->WhereRaw(
                "concat(first_name,' ', last_name) like '%" . $this->searchName . "%' "
            );
        if ($this->searchEmail)
            $userQuery->orWhere('email', 'like', '%' . $this->searchEmail . '%');
        if ($this->searchPhone)
            $userQuery->orWhere('phone', 'like', '%' . $this->searchPhone . '%');
        if ($this->searchStatus >= 0)
            $userQuery->orWhere('active', $this->searchStatus);
        return view('livewire.admin.member.member-list', [ 
            'members' => $userQuery
                ->orderBy($this->sortBy, $this->sortDirection)
                ->role('REGISTERED-MEMBER')
                ->paginate($this->perPage)
        ]);
    }
    public function deleteConfirm($id)
    {
        User::destroy($id);
        $this->showModal('success', 'Success', 'Member is deleted successfully');
    }
    public function deleteAttempt($id)
    {
        $this->showConfirmation("warning", 'Are you sure?', "You won't be able to recover this member!", 'Yes, delete!', 'deleteConfirm', ['id' => $id]); //($type,$title,$text,$confirmText,$method)
    }

    public function changeStatusConfirm($id)
    {
        $this->showConfirmation("warning", 'Are you sure?', "Do you want to change this status?", 'Yes, Change!', 'changeStatus', ['id' => $id]); //($type,$title,$text,$confirmText,$method)
    }

    public function changeStatus(User $member)
    {
        $member->fill(['active' => ($member->active == 1) ? 0 : 1])->save();
    
        $this->showModal('success', 'Success', 'Member status is changed successfully');
    }
}
