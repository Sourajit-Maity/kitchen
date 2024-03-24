<x-admin.form-section submit="saveOrUpdate">
    <x-slot name="form">
    <x-admin.form-group>
                    <x-admin.lable value="Email" required />
                        <x-admin.input type="text" wire:model.defer="email" placeholder="Email" autocomplete="off" class="{{ $errors->has('email') ? 'is-invalid' :'' }}"/>
                        <x-admin.input-error for="email" />
                    </x-admin.form-group>
                    <x-admin.form-group>
                        <x-admin.lable value="Phone" required />
                        <x-admin.input type="text" wire:model.defer="phone" placeholder="Phone" autocomplete="off" class="{{ $errors->has('phone') ? 'is-invalid' :'' }}only-numeric"/>
                        <x-admin.input-error for="phone" />
                    </x-admin.form-group>
                    <x-admin.form-group>
                        <x-admin.lable value="Address" required />
                        <x-admin.input type="text" wire:model.defer="address" placeholder="address"  class="{{ $errors->has('address') ? 'is-invalid' :'' }}" />
                        <x-admin.input-error for="address" />
                    </x-admin.form-group>
                    <x-admin.form-group>
                        <x-admin.lable value="Copyright" required />
                        <x-admin.input type="text" wire:model.defer="copyright" placeholder="copyright"  class="{{ $errors->has('copyright') ? 'is-invalid' :'' }}" />
                        <x-admin.input-error for="copyright" />
                    </x-admin.form-group>
                    <x-admin.form-group>
                        <x-admin.lable value="Terms Condition" required />
                        <x-admin.input type="text" wire:model.defer="terms_condition" placeholder="terms_condition"  class="{{ $errors->has('terms_condition') ? 'is-invalid' :'' }}" />
                        <x-admin.input-error for="terms_condition" />
                    </x-admin.form-group>

                    <x-admin.form-group>
                        <x-admin.lable value="Logo" required />
                        <x-admin.input type="file" wire:model.defer="logo"   class="{{ $errors->has('logo') ? 'is-invalid' :'' }}" accept="image/*" />
                        <x-admin.input-error for="logo" />
                    </x-admin.form-group>

                @if($isEdit)
                    <div class="form-group col-lg-3 d-flex justify-content-end">
                    @if($footer->logo)
                        <img src="{{ Storage::url($footer->logo) }}" width="200px" height="150px">
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
        <x-admin.link :href="route('footer.index')" color="secondary">Cancel</x-admin.link>
    </x-slot>
</x-form-section>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script type="text/javascript">
    
    $(document).ready(function() {
      $(".only-numeric").bind("keypress", function (e) {
          var keyCode = e.which ? e.which : e.keyCode
               
          if (!(keyCode >= 48 && keyCode <= 57)) {
            $(".error").css("display", "inline");
            return false;
          }else{
            $(".error").css("display", "none");
          }
      });
    });
     
</script>