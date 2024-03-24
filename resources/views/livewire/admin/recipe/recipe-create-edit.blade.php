<x-admin.form-section submit="saveOrUpdate">
    <x-slot name="form">
                    <x-admin.form-group>
                        <x-admin.lable value="Recipe Name" required />
                        <x-admin.input type="text" wire:model.defer="recipe_name" placeholder="Recipe Name"  class="{{ $errors->has('recipe_name') ? 'is-invalid' :'' }}" />
                        <x-admin.input-error for="recipe_name" />
                    </x-admin.form-group>

                    <x-admin.form-group>
                        <x-admin.lable value="Recipe Category" required/>
                        <x-admin.dropdown  wire:model.defer="recipe_category_id" placeHolderText="Please select one" autocomplete="off" class="state {{ $errors->has('recipe_category_id') ? 'is-invalid' :'' }}">
                                <x-admin.dropdown-item  :value="$blankArr['value']" :text="$blankArr['text']"/> 
                                @foreach ($recipecategory as $category)
                                    <x-admin.dropdown-item  :value="$category['id']" :text="$category['recipe_category']"/>                      
                                @endforeach
                        </x-admin.dropdown>
                        <x-admin.input-error for="recipe_category_id" />
                    </x-admin.form-group>

                    <x-admin.form-group>
                        <x-admin.lable value="Status" required/>
                        <x-admin.dropdown  wire:model.defer="active" placeHolderText="Please select one" autocomplete="off" class="{{ $errors->has('active') ? 'is-invalid' :'' }}">
                                @foreach ($statusList as $status)
                                    <x-admin.dropdown-item  :value="$status['value']" :text="$status['text']"/>                          
                                @endforeach
                        </x-admin.dropdown>
                        <x-admin.input-error for="active" />
                    </x-admin.form-group>

                    <x-admin.form-group class="col-lg-12" wire:ignore>
                    <x-admin.lable value="Recipe Description" required/>
                    <textarea
                    x-data x-init="editor = CKEDITOR.replace('recipe_description');
                    editor.on('change', function(event){
                        @this.set('recipe_description', event.editor.getData());
                    })" wire:model.defer="recipe_description" id="recipe_description" class="form-control {{ $errors->has('recipe_description') ? 'is-invalid' :'' }}"></textarea>
                    </x-admin.form-group>
                    </div>
            <br>
    </x-slot>
    <x-slot name="actions">
        <x-admin.button type="submit" color="success" wire:loading.attr="disabled">Save</x-admin.button>
        <x-admin.link :href="route('recipe.index')" color="secondary">Cancel</x-admin.link>
    </x-slot>
</x-form-section>
