<x-admin.form-section submit="saveOrUpdate">
    <x-slot name="form">

  
                    <x-admin.form-group>
                        <x-admin.lable value="State" required/>
                        <x-admin.dropdown  wire:model.defer="state_id" placeHolderText="Please select one" autocomplete="off" class="state {{ $errors->has('state_id') ? 'is-invalid' :'' }}">
                                <x-admin.dropdown-item  :value="$blankArr['value']" :text="$blankArr['text']"/> 
                                @foreach ($states as $state)
                                    <x-admin.dropdown-item  :value="$state['id']" :text="$state['state_name']"/>                      
                                @endforeach
                        </x-admin.dropdown>
                        <x-admin.input-error for="state_id" />
                    </x-admin.form-group>

                    <x-admin.form-group>
                        <x-admin.lable value="City Name" required />
                        <x-admin.input type="text" wire:model.defer="city_name" placeholder="City Name"  class="{{ $errors->has('city_name') ? 'is-invalid' :'' }}" />
                        <x-admin.input-error for="city_name" />
                    </x-admin.form-group>
                     
            </div>
            <br>
    </x-slot>
    <x-slot name="actions">
        <x-admin.button type="submit" color="success" wire:loading.attr="disabled">Save</x-admin.button>
        <x-admin.link :href="route('city.index')" color="secondary">Cancel</x-admin.link>
    </x-slot>
</x-form-section>
