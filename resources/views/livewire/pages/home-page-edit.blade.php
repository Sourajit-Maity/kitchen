<x-admin.form-section submit="saveOrUpdate">
    <x-slot name="form">
        <div class="form-group col-lg-12">
            {{-- <h1>Banner Section</h1> --}}
            <div class="kt-portlet__head">
                <div class="kt-portlet__head-label">
                    <h3 class="kt-portlet__head-title">
                        Banner Section
                    </h3>
                </div>
            </div>
        </div>
        <x-admin.form-group>
            <x-admin.lable value="Heading" required />
            <x-admin.input type="text"  wire:model.defer="banner_heading" placeholder="Enter Heading"
                class="{{ $errors->has('banner_heading') ? 'is-invalid' :'' }}"/>
            <x-admin.input-error for="banner_heading" />
        </x-admin.form-group>
        <x-admin.form-group>
            <x-admin.lable value="Sub Heading" required />
            <x-admin.input type="text" wire:model.defer="banner_sub_heading" placeholder="Enter Sub Heading"
                class="{{ $errors->has('banner_sub_heading') ? 'is-invalid' :'' }}" />
            <x-admin.input-error for="banner_sub_heading" />
        </x-admin.form-group>
        <x-admin.form-group>
            <x-admin.lable value="Content" required />
            <x-admin.textarea wire:model.defer="banner_content" placeholder="Enter Content"
                class="{{ $errors->has('banner_content') ? 'is-invalid' :'' }}" rows=5/>
            <x-admin.input-error for="banner_content" />
        </x-admin.form-group>
        <div class="form-group col-lg-3">
            <x-admin.lable value="Image" />
                <x-admin.input type="file" wire:model.defer="banner_image" class="{{ $errors->has('banner_image') ? 'is-invalid' :'' }}" accept="image/*" />
            <x-admin.input-error for="banner_image" />
        </div>
        <div class="form-group col-lg-3 d-flex justify-content-end">
            <img src="{{Storage::disk('public')->exists($cms->home->banner_image) ? Storage::url($cms->home->banner_image) : asset($cms->home->banner_image)}}" width="200px" height="150px">
        </div>
        <div class="form-group col-lg-12">
            <div class="kt-portlet__head">
                <div class="kt-portlet__head-label">
                    <h3 class="kt-portlet__head-title">
                        Welcome Section
                    </h3>
                </div>
            </div>
        </div>
        <x-admin.form-group>
            <x-admin.lable value="Heading" required />
            <x-admin.input type="text" wire:model.defer="welcome_heading" placeholder="Enter Heading"
                class="{{ $errors->has('welcome_heading') ? 'is-invalid' :'' }}" />
            <x-admin.input-error for="welcome_heading" />
        </x-admin.form-group>
        <x-admin.form-group>
            <x-admin.lable value="Sub Heading" required />
            <x-admin.input type="text" wire:model.defer="welcome_sub_heading" placeholder="Enter Sub Heading"
                class="{{ $errors->has('welcome_sub_heading') ? 'is-invalid' :'' }}" />
            <x-admin.input-error for="welcome_sub_heading" />
        </x-admin.form-group>
        <x-admin.form-group>
            <x-admin.lable value="Content on Left" required />
            <x-admin.textarea wire:model.defer="welcome_left_content" placeholder="Enter Content"
                class="{{ $errors->has('welcome_left_content') ? 'is-invalid' :'' }}" rows=5/>
            <x-admin.input-error for="welcome_left_content" />
        </x-admin.form-group>
        <x-admin.form-group>
            <x-admin.lable value="Content on Right" required />
            <x-admin.textarea wire:model.defer="welcome_right_content" placeholder="Enter Content"
                class="{{ $errors->has('welcome_right_content') ? 'is-invalid' :'' }}" rows=5/>
            <x-admin.input-error for="welcome_right_content" />
        </x-admin.form-group>
        <div class="form-group col-lg-12">
            <div class="kt-portlet__head">
                <div class="kt-portlet__head-label">
                    <h3 class="kt-portlet__head-title">
                        Crew Section
                    </h3>
                </div>
            </div>
        </div>
        <x-admin.form-group>
            <x-admin.lable value="Heading" required />
            <x-admin.input type="text" wire:model.defer="crew_heading" placeholder="Enter Heading"
                class="{{ $errors->has('crew_heading') ? 'is-invalid' :'' }}" />
            <x-admin.input-error for="crew_heading" />
        </x-admin.form-group>
        <div class="form-group col-lg-3">
            <x-admin.lable value="Image" />
                <x-admin.input type="file" wire:model.defer="crew_image" class="{{ $errors->has('crew_image') ? 'is-invalid' :'' }}" accept="image/*" />
            <x-admin.input-error for="crew_image" />
        </div>
        <div class="form-group col-lg-3 d-flex justify-content-end">
            <img src="{{Storage::disk('public')->exists($cms->home->crew_image) ? Storage::url($cms->home->crew_image) : asset($cms->home->crew_image)}}" width="200px" height="150px">
        </div>
        <div class="form-group col-lg-12">
            <div class="kt-portlet__head">
                <div class="kt-portlet__head-label">
                    <h3 class="kt-portlet__head-title">
                        Shipping Section
                    </h3>
                </div>
            </div>
        </div>
        <x-admin.form-group>
            <x-admin.lable value="Heading" required />
            <x-admin.input type="text" wire:model.defer="shipping_heading" placeholder="Enter Heading"
                class="{{ $errors->has('shipping_heading') ? 'is-invalid' :'' }}" />
            <x-admin.input-error for="shipping_heading" />
        </x-admin.form-group>
        <x-admin.form-group>
            <x-admin.lable value="Content" required />
            <x-admin.textarea wire:model.defer="shipping_content" placeholder="Enter Content"
                class="{{ $errors->has('shipping_content') ? 'is-invalid' :'' }}" rows=5/>
            <x-admin.input-error for="shipping_content" />
        </x-admin.form-group>
        <div class="form-group col-lg-3">
            <x-admin.lable value="Image" />
                <x-admin.input type="file" wire:model.defer="shipping_image" class="{{ $errors->has('shipping_image') ? 'is-invalid' :'' }}" accept="image/*" />
            <x-admin.input-error for="shipping_image" />
        </div>
        <div class="form-group col-lg-3 d-flex justify-content-end">
            <img src="{{Storage::disk('public')->exists($cms->home->shipping_image) ? Storage::url($cms->home->shipping_image) : asset($cms->home->shipping_image)}}" width="200px" height="150px">
        </div>
        </div>
        <br>
    </x-slot>
    <x-slot name="actions">
        <x-admin.button type="submit" color="success" wire:loading.attr="disabled">Save</x-admin.button>
        <x-admin.link :href="route('cms.index')" color="secondary">Cancel</x-admin.link>
    </x-slot>
</x-form-section>
