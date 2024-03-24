<x-admin.form-section submit="saveOrUpdate">
    <x-slot name="form">
                    <x-admin.form-group>
                        <x-admin.lable value="Slogan" required />
                        <x-admin.input type="text" wire:model.defer="slogan" placeholder="slogan"  class="{{ $errors->has('slogan') ? 'is-invalid' :'' }}" />
                        <x-admin.input-error for="slogan" />
                    </x-admin.form-group>

                    <x-admin.form-group>
                        <x-admin.lable value="Logo" required />
                        <x-admin.input type="file" wire:model.defer="logo"   class="{{ $errors->has('logo') ? 'is-invalid' :'' }}" accept="image/*" />
                        <x-admin.input-error for="logo" />
                    </x-admin.form-group>

                @if($isEdit)
                    <div class="form-group col-lg-3 d-flex justify-content-end">
                    @if($header->logo)
                        <img src="{{ Storage::url($header->logo) }}" width="200px" height="150px">
                    @else
                        <img src="" alt="No Image" width="200px" height="150px">
                    @endif
                    </div>
                @endif
                    
            </div>
            <br>
    </x-slot>
    <x-slot name="actions">
        <x-admin.button type="submit" color="success" wire:loading.attr="disabled">Save</x-admin.button>
        <x-admin.link :href="route('country.index')" color="secondary">Cancel</x-admin.link>
    </x-slot>
</x-form-section>