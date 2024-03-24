<x-admin.form-section submit="saveOrUpdate">
    <x-slot name="form">
                    <x-admin.form-group>
                        <x-admin.lable value="Recipe Category" required />
                        <x-admin.input type="text" wire:model.defer="recipe_category" placeholder="Category"  class="{{ $errors->has('recipe_category') ? 'is-invalid' :'' }}" />
                        <x-admin.input-error for="recipe_category" />
                    </x-admin.form-group>
                    
            </div>
            <br>
    </x-slot>
    <x-slot name="actions">
        <x-admin.button type="submit" color="success" wire:loading.attr="disabled">Save</x-admin.button>
        <x-admin.link :href="route('categoryrecipe.index')" color="secondary">Cancel</x-admin.link>
    </x-slot>
</x-form-section>
