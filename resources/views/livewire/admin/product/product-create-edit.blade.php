<x-admin.form-section submit="saveOrUpdate" enctype="multipart/form-data">
    <x-slot name="form">
                    <x-admin.form-group>
                        <x-admin.lable value="Product Name" required />
                        <x-admin.input type="text" wire:model.defer="product_name" placeholder="Product Name"  class="{{ $errors->has('product_name') ? 'is-invalid' :'' }}" />
                        <x-admin.input-error for="product_name" />
                    </x-admin.form-group>

                    <x-admin.form-group>
                        <x-admin.lable value="Product Price" required />
                        <x-admin.input type="text" wire:model.defer="price" placeholder="Product Price"  class="{{ $errors->has('price') ? 'is-invalid' :'' }} only-numeric" />
                        <x-admin.input-error for="price" />
                    </x-admin.form-group>
                    <x-admin.form-group>
                        <x-admin.lable value="Product Offer Price" />
                        <x-admin.input type="text" wire:model.defer="offer_price"   placeholder="Product Offer Price"  class="{{ $errors->has('offer_price') ? 'is-invalid' :'' }} only-numeric" />
                        <x-admin.input-error for="offer_price" />
                        
                    </x-admin.form-group>

                    <x-admin.form-group>
                        <x-admin.lable value="Product Image" required />
                        <x-admin.input type="file" wire:model.defer="product_photo_path"   class="{{ $errors->has('product_photo_path') ? 'is-invalid' :'' }}" accept="image/*" />
                        <x-admin.input-error for="product_photo_path" />
                    </x-admin.form-group>

                @if($isEdit)
                    <div class="form-group col-lg-3 d-flex justify-content-end">
                    @if($product->product_photo_path)
                        <img src="{{ Storage::url($product->product_photo_path) }}" width="200px" height="150px">
                    @else
                        <img src="" alt="No Image" width="200px" height="150px">
                    @endif
                    </div>
                @endif

                <x-admin.form-group>
                        <x-admin.lable value="Product Video"  />
                        <x-admin.input type="file" wire:model.defer="product_video_path"   class="{{ $errors->has('product_video_path') ? 'is-invalid' :'' }}" accept="video/*" />
                        <x-admin.input-error for="product_video_path" />
                    </x-admin.form-group>

                @if($isEdit)
                    <div class="form-group col-lg-3 d-flex justify-content-end">
                    @if($product->product_video_path)
                        <img src="{{ Storage::url($product->product_video_path) }}"  width="200px" height="150px">
                    @else
                        <img src="" alt="No Video" width="200px" height="150px">
                    @endif
                    </div>
                @endif

                   
                    <x-admin.form-group class="col-lg-12" wire:ignore>
                    <x-admin.lable value="Product Details" required/>
                    <textarea
                    x-data x-init="editor = CKEDITOR.replace('product_details');
                    editor.on('change', function(event){
                        @this.set('product_details', event.editor.getData());
                    })" wire:model.defer="product_details" id="product_details" class="form-control {{ $errors->has('product_details') ? 'is-invalid' :'' }}"></textarea>
                    </x-admin.form-group>
                </div>
            <br>
    </x-slot>
    <x-slot name="actions">
        <x-admin.button type="submit" color="success" wire:loading.attr="disabled">Save</x-admin.button>
        <x-admin.link :href="route('product.index')" color="secondary">Cancel</x-admin.link>
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