<div>
    {{-- Because she competes with no one, no one can compete with her. --}}


    <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#productModal"><i class="anticon anticon-plus-circle m-r-5"></i>
    <span>Add Product</span>
</button>

<!-- Modal -->
<div class="modal fade" id="productModal" tabindex="-1" aria-labelledby="productModalLabel" aria-hidden="true" wire:ignore.self>
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="productModalLabel">Add New Product</h5>
                {{-- <x-validation-errors /> --}}
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <div class="row">

                        <div class="col-md-12">
                            <label for="product_name" class="float-left">Product Name</label>
                            <input type="text" name="product_name" id="product_name" class="form-control" placeholder="Product Name" wire:model='product_name'>
                            @error('product_name') <span style="color:red">{{ $message }}</span> @enderror
                        </div>

                    </div>
                </div>
                <div class="form-group">

                    <div class="row">
                        
                        <div class="col-md-12">
                            <label for="product_description" class="float-left">Product Description</label>
                            <textarea name="product_description" id="" cols="30" rows="2" class="form-control" placeholder="Product Description" wire:model='product_description'></textarea>
                            @error('product_description') <span style="color:red">{{ $message }}</span> @enderror
                        </div>

                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-4">
                            <label for="category" class="float-left mt-2">Product Category</label>
                        </div>
                        <div class="col-md-8">
                            <select name="category" id="category" class="custom-select" wire:model='product_category'>
                                <option value="">Select Category</option>

                            </select>
                            @error('product_category') <span style="color:red">{{ $message }}</span> @enderror
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-4">
                            <label for="cost" class="float-left">Cost</label>
                            <input type="text" name="cost" id="cost" class="form-control" placeholder="Cost" wire:model='product_cost'> 
                            @error('product_cost') <span style="color:red">{{ $message }}</span> @enderror
                        </div>
                        <div class="col-md-4">
                            <label for="price" class="float-left">Price</label>
                            <input type="text" class="form-control" name="price" id="price" placeholder="Price" wire:model='product_price'>
                            @error('product_price') <span style="color:red">{{ $message }}</span> @enderror
                        </div>
                        <div class="col-md-4">
                            <label for="stock" class="float-left">Stock</label>
                            <input type="text" class="form-control" name="stock" id="price" placeholder="Stock" wire:modl='product_stock'>
                            @error('product_stock') <span style="color:red">{{ $message }}</span> @enderror
                        </div>
                    </div>
                </div>
                {{-- <div class="form-group">
                    <div class="row">
                        <div class="col-md-4">
                            <label for="sale_price">Sale Price</label>
                        </div>
                        <div class="col-md-8">
                            <input type="text" name="sale_price" id="sale_price" class="form-control" placeholder="Sale Price"> 
                        </div>
                    </div>
                </div> --}}
                {{-- <div class="form-group">
                    <div class="row">
                        <div class="col-md-4">
                            <label for="stock_quantity" class="float-left">Stock Qantity</label>
                        </div>
                        <div class="col-md-8">
                            <input type="number" name="stock_quantity" id="stock_quantity" class="form-control" placeholder="Stock Quantity"> 
                        </div>
                    </div>
                </div> --}}
               
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-4 mt-2">
                            <label for="product_image" class="float-left">Product Image</label>
                        </div>
                        <div class="col-md-8">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                                </div>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="inputGroupFile01"
                                    aria-describedby="inputGroupFileAddon01" wire:model='product_image'>
                                    <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <div class="col-md-12">

                    @error('product_image') <span style="color:red">{{ $message }}</span> @enderror
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" wire:click='save'>Save changes</button>
            </div>
        </div>
    </div>
</div>


</div>
