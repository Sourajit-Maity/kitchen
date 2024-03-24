<x-admin.form-section submit="saveOrUpdate">
    <x-slot name="form">
                    <x-admin.form-group>
                        <x-admin.lable value="FAQ Question" required />
                        <x-admin.input type="text" wire:model.defer="faq_question" placeholder="Question"  class="{{ $errors->has('faq_question') ? 'is-invalid' :'' }}" />
                        <x-admin.input-error for="faq_question" />
                    </x-admin.form-group>
                    
                    <x-admin.form-group class="col-lg-12" wire:ignore>
                    <x-admin.lable value="FAQ Answer" required />
                    <textarea
                    x-data x-init="editor = CKEDITOR.replace('faq_answer');
                    editor.on('change', function(event){
                        @this.set('faq_answer', event.editor.getData());
                    })" wire:model.defer="faq_answer" id="faq_answer" class="form-control {{ $errors->has('faq_answer') ? 'is-invalid' :'' }}"></textarea>
                    </x-admin.form-group>
                </div>
            <br>
    </x-slot>
    <x-slot name="actions">
        <x-admin.button type="submit" color="success" wire:loading.attr="disabled">Save</x-admin.button>
        <x-admin.link :href="route('faq-master.index')" color="secondary">Cancel</x-admin.link>
    </x-slot>
</x-form-section>