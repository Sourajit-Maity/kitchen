<x-admin.form-section submit="saveOrUpdate">
    <x-slot name="form">
                    <x-admin.form-group>
                        <x-admin.lable value="Payment Name" required />
                        <x-admin.input type="text" wire:model.defer="payment_name" placeholder="Payment Name"  class="{{ $errors->has('payment_name') ? 'is-invalid' :'' }}" />
                        <x-admin.input-error for="payment_name" />
                    </x-admin.form-group>

                    <x-admin.form-group>
                        <x-admin.lable value="Payment Percentage" required />
                        <x-admin.input type="text" wire:model.defer="payment_percentage" placeholder="Payment Percentage"  class="{{ $errors->has('payment_percentage') ? 'is-invalid' :'' }} only-numeric" maxlength="3"/>
                        <x-admin.input-error for="payment_percentage" />
                    </x-admin.form-group>
                    
            </div>
            <br>
    </x-slot>
    <x-slot name="actions">
        <x-admin.button type="submit" color="success" wire:loading.attr="disabled">Save</x-admin.button>
        <x-admin.link :href="route('payment-percentage.index')" color="secondary">Cancel</x-admin.link>
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