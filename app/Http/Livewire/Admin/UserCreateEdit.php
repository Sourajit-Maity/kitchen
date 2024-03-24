<?php

namespace App\Http\Livewire\Admin;

use App\Http\Livewire\Traits\AlertMessage;
use App\Models\User;
use Livewire\Component;
use Illuminate\Validation\Rule;
use Livewire\WithFileUploads;
use Spatie\MediaLibrary\Models\Media;
use Carbon\Carbon;

class UserCreateEdit extends Component
{
    use WithFileUploads;
    use AlertMessage;
    public $first_name, $last_name, $email, $password, $phone, $active, $password_confirmation, $user, $model_id;
    public $address;
    public $isEdit = false;
    public $statusList = [];
    public $photo;
    public $photos = [];
    public $model_image, $imgId, $model_documents;
    protected $listeners = ['refreshProducts' => '$refresh'];

    public function mount($user = null)
    {
        if ($user) {
            $this->user = $user;
            $this->fill($this->user);
            $this->isEdit = true;
        } else
            $this->user = new User;

        $this->statusList = [
            ['value' => 0, 'text' => "Choose User"],
            ['value' => 1, 'text' => "Active"],
            ['value' => 0, 'text' => "Inactive"]
        ];
        $this->model_image = Media::where(['model_id' => $this->user->id, 'collection_name' => 'images'])->first();
        if (!$this->model_image == null) {
            $this->imgId = $this->model_image->id;
        }
        $this->model_documents = Media::where(['model_id' => $this->user->id, 'collection_name' => 'documents'])->get();
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
                'email' => ['required', 'email', 'max:255', Rule::unique('users')->ignore($this->user->id), 'regex:/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix'],
                'phone' => ['required', Rule::unique('users')->ignore($this->user->id), 'regex:/^([0-9\s+\(\)]*)$/', 'min:8', 'max:13'],
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
        $this->user->fill($this->validate($this->isEdit ? $this->validationRuleForUpdate() : $this->validationRuleForSave()))->save();
        $this->isEdit ? $this->user->verified_at = Carbon::now() : $this->user->verified_at = Carbon::now();
        if ($this->photo) {
            if ($this->imgId) {
                $item = Media::find($this->imgId);
                $item->delete(); // delete previous image in the database

                $this->user->addMedia($this->photo->getRealPath())
                    ->usingName($this->photo->getClientOriginalName())
                    ->toMediaCollection('images');
            } else {
                $this->user->addMedia($this->photo->getRealPath())
                    ->usingName($this->photo->getClientOriginalName())
                    ->toMediaCollection('images');
            }
        }
        if ($this->photos) {
            foreach ($this->photos as $photo) {
                $this->user->addMedia($photo->getRealPath())
                    ->usingName($photo->getClientOriginalName())
                    ->toMediaCollection('documents');
            }
        }
        if (!$this->isEdit)
            $this->user->assignRole('CLIENT');
        $msgAction = 'User is ' . ($this->isEdit ? 'updated' : 'added') . ' successfully';
        $this->showToastr("success", $msgAction);

        return redirect()->route('users.index');
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
        return view('livewire.admin.user-create-edit');
    }
}
