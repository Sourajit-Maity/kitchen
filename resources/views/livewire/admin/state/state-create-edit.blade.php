<x-admin.form-section submit="saveOrUpdate">
    <x-slot name="form">
                   

                    <x-admin.form-group>
                        <x-admin.lable value="Country" required/>
                        <x-admin.dropdown  wire:model.defer="country_id" placeHolderText="Please select one" autocomplete="off" class="{{ $errors->has('country_id') ? 'is-invalid' :'' }}">
                                <x-admin.dropdown-item  :value="$blankArr['value']" :text="$blankArr['text']"/> 
                                @foreach ($countries as $country)
                                    <x-admin.dropdown-item  :value="$country['id']" :text="$country['country_name']"/>                      
                                @endforeach
                        </x-admin.dropdown>
                        <x-admin.input-error for="country_id" />
                    </x-admin.form-group>
                    <x-admin.form-group>
                        <x-admin.lable value="State Name" required />
                        <x-admin.input type="text" wire:model.defer="state_name" placeholder="State Name"  class="{{ $errors->has('state_name') ? 'is-invalid' :'' }}" />
                        <x-admin.input-error for="state_name" />
                    </x-admin.form-group>
                   
                     
            </div>
            <br>
    </x-slot>
    <x-slot name="actions">
        <x-admin.button type="submit" color="success" wire:loading.attr="disabled">Save</x-admin.button>
        <x-admin.link :href="route('state.index')" color="secondary">Cancel</x-admin.link>
    </x-slot>
</x-form-section>
