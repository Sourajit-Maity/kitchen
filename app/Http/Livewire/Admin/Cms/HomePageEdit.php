<?php

namespace App\Http\Livewire\Admin\Cms;

use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\File;
use App\Http\Livewire\Traits\AlertMessage;
use App\Models\Cms;
use App\Models\Pages;
use App\Models\HomePage; 

class HomePageEdit extends Component
{
    use AlertMessage;
    use WithFileUploads;
    public $banner_heading,$banner_sub_heading,$banner_content,$content2_heading,
    $content1_heading,$content3_heading,$content1_text,$content3_text,
    $content2_text,$content4_heading,$content4_text,$content1_image = "",
    $content4_image = "",$content3_image = "",$content2_image = "",$banner_image = "",$details;

    public function mount($details = null){
        if($details) {
            $details = $details->toArray();
            $this->homepagedetails = $details['home'];
            $this->fill($this->homepagedetails);
            $this->isEdit = true;            
        }        
    }


    public function validationRuleForUpdate(): array
    {
        return
            [
                'banner_heading' => ['required', 'max:255'],
                'banner_sub_heading' => ['required', 'max:255'],
                'banner_content' => ['required'],
                'content1_heading' => ['required', 'max:255'],
                'content1_text' => ['required'],
                'content2_heading' => ['required', 'max:255'],
                'content2_text' => ['required'],
                'content3_heading' => ['required', 'max:255'],
                'content3_text' => ['required'],
                'content4_heading' => ['required', 'max:255'],
                'content4_text' => ['required'],               

            ];
    }


    public function saveOrUpdate()
    {
        // dd($this->cms->home);
        // dd($this);
        if ($this->details->home) {
            $validatedData = $this->validate($this->validationRuleForUpdate());

            if (!is_string($this->banner_image)) {
                $this->validate([
                    'banner_image' => ['mimes:jpg,jpeg,png', 'max:20000']
                ]);
                File::delete(public_path() . '/storage/' . $this->banner_image);
                $name = md5($this->banner_image . microtime()) . '.' . $this->banner_image->extension();
                $this->banner_image->storeAs("cms_images", $name, "public");
                $validatedData['banner_image'] = "cms_images/" . $name;
            }
            if (!is_string($this->content1_image)) {
                $this->validate([
                    'content1_image' => ['mimes:jpg,jpeg,png', 'max:20000']
                ]);
                File::delete(public_path() . '/storage/' . $this->content1_image);
                $name = md5($this->content1_image . microtime()) . '.' . $this->content1_image->extension();
                $this->content1_image->storeAs("cms_images", $name, "public");
                // $this->cms->home->update(['content1_image' => "cms_images/" . $name]);
                $validatedData['content1_image'] = "cms_images/" . $name;
            }
           if (!is_string($this->content3_image)) {
                $this->validate([
                    'content3_image' => ['mimes:jpg,jpeg,png', 'max:20000']
                ]);
                File::delete(public_path() . '/storage/' . $this->content3_image);
                $name = md5($this->content3_image . microtime()) . '.' . $this->content3_image->extension();
                $this->content3_image->storeAs("cms_images", $name, "public");
                // $this->cms->home->update(['content3_image' => "cms_images/" . $name]);
                $validatedData['content3_image'] = "cms_images/" . $name;
            }
            if (!is_string($this->content2_image)) {
                $this->validate([
                    'content2_image' => ['mimes:jpg,jpeg,png', 'max:20000']
                ]);
                File::delete(public_path() . '/storage/' . $this->content2_image);
                $name = md5($this->content2_image . microtime()) . '.' . $this->content2_image->extension();
                $this->content2_image->storeAs("cms_images", $name, "public");
                // $this->cms->home->update(['content2_image' => "cms_images/" . $name]);
                $validatedData['content2_image'] = "cms_images/" . $name;
            }
            if (!is_string($this->content4_image)) {
                $this->validate([
                    'content4_image' => ['mimes:jpg,jpeg,png', 'max:20000']
                ]);
                File::delete(public_path() . '/storage/' . $this->content4_image);
                $name = md5($this->content4_image . microtime()) . '.' . $this->content4_image->extension();
                $this->content4_image->storeAs("cms_images", $name, "public");
                // $this->cms->home->update(['content4_image' => "cms_images/" . $name]);
                $validatedData['content4_image'] = "cms_images/" . $name;
            }    
        
            
            $this->details->home->update($validatedData);
            $msgAction = $this->details->name . ' Page has been updated';
            $this->showToastr("success", $msgAction);
            return redirect()->route('pages.index');
        }
        $this->showToastr("error", "No record to update!!");
        return redirect()->route('pages.index');
    }

    public function render()
    {
        return view('livewire.admin.cms.home-page-edit');
    }
}
