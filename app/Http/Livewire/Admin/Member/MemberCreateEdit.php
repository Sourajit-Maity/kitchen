<?php

namespace App\Http\Livewire\Admin\Member;

use App\Http\Livewire\Traits\AlertMessage;
use App\Models\User;
use Livewire\Component;
use Illuminate\Validation\Rule;
use Livewire\WithFileUploads;
use Spatie\MediaLibrary\Models\Media;

class MemberCreateEdit extends Component
{
    use WithFileUploads;
    use AlertMessage;
    public $first_name, $last_name, $email, $password, $phone, $active, $password_confirmation, $member, $model_id;
    public $address;
    public $isEdit = false;
    public $statusList = [];
    public $photo;
    public $photos = [];
    public $model_image, $imgId, $model_documents;
    protected $listeners = ['refreshProducts' => '$refresh'];

    public function mount($member = null)
    {
        if ($member) {
            $this->member = $member;
            $this->fill($this->member);
            $this->isEdit = true;
        } else
            $this->member = new User;

        $this->statusList = [
            ['value' => 0, 'text' => "Choose Member"],
            ['value' => 1, 'text' => "Active"],
            ['value' => 0, 'text' => "Inactive"]
        ];
        $this->model_image = Media::where(['model_id' => $this->member->id, 'collection_name' => 'images'])->first();
        if (!$this->model_image == null) {
            $this->imgId = $this->model_image->id;
        }
        $this->model_documents = Media::where(['model_id' => $this->member->id, 'collection_name' => 'documents'])->get();
    }

    public function validationRuleForSave(): array
    {
        return
            [
                'first_name' => ['required', 'max:255', 'regex:/^[a-zA-Z]+$/u'],
                'last_name' => ['required', 'max:255', 'regex:/^[a-zA-Z]+$/u'],
                'email' => ['required', 'email', 'max:255', Rule::unique('users'), 'regex:/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix'],
                'phone' => ['required', Rule::unique('users'), 'min:8', 'max:13', 'regex:/^([0-9\s+\(\)]*)$/'],
                'password' => ['required', 'max:255', 'min:6', 'confirmed'],
                'password_confirmation' => ['required', 'max:255', 'min:6'],
                'active' => ['required'],
                'photo' => ['required'],
                'address' => ['nullable'],

            ];
    }
    public function validationRuleForUpdate(): array
    {
        return
            [
                'first_name' => ['required', 'max:255', 'regex:/^[a-zA-Z]+$/u'],
                'last_name' => ['required', 'max:255', 'regex:/^[a-zA-Z]+$/u'],
                'active' => ['required'],
                'email' => ['required', 'email', 'max:255', Rule::unique('users')->ignore($this->member->id), 'regex:/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix'],
                'phone' => ['required', Rule::unique('users')->ignore($this->member->id), 'regex:/^([0-9\s+\(\)]*)$/', 'min:8', 'max:13'],
                'address' => ['nullable'],
            ];
    }

    protected $messages = [
        'first_name.required'=>'First name is required.',
        'first_name.regex'=>'First name should be alphabate.',
        'last_name.required'=>'Last name is required.',
        'last_name.regex'=>'Last name should be alphabate.',
        'email.required'=>'Email id is required.',
        'email.email' => 'Give Correct format',
        'phone.required'=>'Phone number is required.',
        'phone.regex'=>'Phone number should be integer.',
        'email.regex'=>'Mail format is not correct.',
    ];

    public function saveOrUpdate()
    {
        $this->member->fill($this->validate($this->isEdit ? $this->validationRuleForUpdate() : $this->validationRuleForSave()))->save();
        if ($this->photo) {
            if ($this->imgId) {
                $item = Media::find($this->imgId);
                $item->delete(); // delete previous image in the database

                $this->member->addMedia($this->photo->getRealPath())
                    ->usingName($this->photo->getClientOriginalName())
                    ->toMediaCollection('images');
            } else {
                $this->member->addMedia($this->photo->getRealPath())
                    ->usingName($this->photo->getClientOriginalName())
                    ->toMediaCollection('images');
            }
        }
        if ($this->photos) {
            foreach ($this->photos as $photo) {
                $this->member->addMedia($photo->getRealPath())
                    ->usingName($photo->getClientOriginalName())
                    ->toMediaCollection('documents');
            }
        }
        if (!$this->isEdit)
            $this->member->assignRole('REGISTERED-MEMBER');
        $msgAction = 'Registered Member is ' . ($this->isEdit ? 'updated' : 'added') . ' successfully';
        $this->showToastr("success", $msgAction);

        return redirect()->route('registered-member.index');
    }
    public function deletedocuments($id)
    {
        $item = Media::find($id);
        $item->delete(); // delete previous image in the database
        $this->showModal('success', 'Success', 'Document deleted successfully');
        $this->emit('refreshProducts');
    }
    public function render()
    {
        return view('livewire.admin.member.member-create-edit');
    }
}

 