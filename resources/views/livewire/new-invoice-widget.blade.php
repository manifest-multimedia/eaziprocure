<div>

    <div class="page-header">
        <h2 class="header-title">Create New Invoice</h2>
        <div class="header-sub-title">
            <nav class="breadcrumb breadcrumb-dash">
                <a href="#" class="breadcrumb-item"><i class="anticon anticon-file m-r-5"></i>Invoices</a>
                {{-- <a class="breadcrumb-item" href="#">Apps</a>
                <a class="breadcrumb-item" href="#">E-commerce</a> --}}
                <span class="breadcrumb-item active">New</span>
            </nav>
        </div>
    </div>

<div class="row" wire:ignore.self>
    <div class="col-md-5 h-100">
        <div class="card">
            <div class="card-body">
                <div class="card-title">
                    <h1 class="card-title">Customer</h1>
                    <button type="button" class="btn btn-primary col-12"><i class="material-icons">add</i>Add A Customer</button>   

                    <div class="mt-2">
                        <div class="mt-1">
                            <input type="text" name="customer_name" id="customer_name" placeholder="Customer Name" class="form-control" disabled>
                        </div>
                        <div class="mt-1">

                            <input type="text" name="customer_email" id="customer_email" placeholder="Customer Email" class="form-control" disabled>
                        </div>
                        <div class="mt-1">

                            <textarea name="customer_address" id="customer_address" cols="1" rows="2" placeholder="Customer Addresss" class="form-control" disabled></textarea>
                        </div>

                    </div>
                    {{-- <input type="text" name="customer" id="customer" class="form-control" placeholder="Customer"> --}}
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-1"></div>
    <div class="col-md-6 h-100">
        <div class="row">
         <div class="col-md-4"><button class="btn btn-primary col-12" wire:click.prevent="preview">Preview Invoice</button></div>  
            <div class="col-md-4">
                {{-- <x-generate-pdf-button :items="$invoiceItems" :customer="$customer" :organization="$org_id" />  --}}
                <button class="btn btn-primary col-12" wire:click.prevent="preview">Download PDF</button>
            </div>
            <div class="col-md-4"><button class="btn btn-danger col-12">Discard</button></div>
        </div>
        <div class="co-md-12 mt-5">
            <div class="card">
                <div class="card-body">
                   <div class="row">
                        <div class="col-md-6">
                            <label for="invoice_date">Invoice Date [{{print_r($invoiceItems)}}]</label>
                        <input type="date" name="invoice_date" id="invoice_date" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label for="invoice_due_date">Due Date</label>
                            <input type="date" name="invoice_due_date" id="invoice_due_date" class="form-control">
                        </div>
                   </div>
                </div>
            </div>
            
        </div>
    </div>
    {{-- <div class="col-md-2"></div> --}}
</div>
   

{{-- <div class="card" wire:ignore.self>
    <div class="card-body">

        <div class="row">
            <div class="col-md-10"></div>
            <div class="col-md-2 p-1 text-center"  >
                <h1 class="card-title">Add Item</h1>
                <button type="button" class="btn btn-primary btn-burger" wire:click.prevent="addItem"><i class="material-icons">add</i></button>  
            </div>
        </div>
    </div>
</div> --}}

    <div class="card" wire:ignore.self>
        <div class="card-body">
            {{-- Add Item Button --}}
            <div class="row mt-2 mb-5">
                <div class="col-md-10">
                    <h1 class="card-title">Add Item(s)</h1>
                <small> Creating a new invoice is super easy! </small>
                </div>
                <div class="col-md-2 p-1 text-right"  >
                    
                    <button type="button" class="btn btn-primary btn-burger" wire:click.prevent="addItem"><i class="material-icons">add</i></button>  
                </div>
            </div>
            {{-- End Add Item Button --}}
            <div class="row">
                <div class="col-md-11">
                    <div class="row">
                        <div class="col-md-4"><h1 class="card-title">Item/Product</h1></div>
                        <div class="col-md-4"><h1 class="card-title">Description</h1></div>
                        <div class="col-md-2"><h1 class="card-title">Quantity</h1></div>
                        <div class="col-md-2"><h1 class="card-title">Amount</h1></div>
                    </div>
                </div>
                <div class="col-md-1 text-center"><h1 class="card-title text-center">Action</h1></div>
            </div>
        
        

            @foreach ($invoiceItems as $index => $item)
                <div class="row" wire:key={{'item-'.$item['key']}}>
            
                    <div class="col-md-11 mt-3">
                            <div class="row" wire:key="{{'line'.$item['key']}}">
                                <div class="col-md-4">
                                    {{-- <label for="new_item">Item/Product</label> --}}
                                    <input type="text"  name="new_item" id="new_item" class="form-control" placeholder="New Invoice Item" wire:key={{'product_name-'.$item['key']}} wire:model="invoiceItems.{{$index}}.item_name">
                                </div>
                                <div class="col-md-4">
                                    {{-- <label for="description">Description</label> --}}
                                    <input type="text" name="description" id="description" class="form-control" placeholder="Description" wire:key={{'product-description'.$item['key']}} wire:model="invoiceItems.{{$index}}.item_description">
                                </div>
                                <div class="col-md-2">
                                    {{-- <label for="quantity">Quantity</label> --}}
                                    <input type="number" name="quantity" id="quantity" class="form-control" placeholder="Qty" wire:key={{'product-quantity'.$item['key']}} wire:model="invoiceItems.{{$index}}.item_quantity">
                                </div>
                                <div class="col-md-2">
                                    {{-- <label for="price">Price</label> --}}
                                    <input type="text" name="price" id="price" class="form-control" placeholder="Price" wire:key={{'product-price'.$item['key']}} wire:model="invoiceItems.{{$index}}.item_price">
                                </div>
                            </div>
                    </div>
                    <div class="col-md-1">
                        <div class="row mt-2 pl-3 text-left">
                            <button type="button" class="btn btn-danger btn-burger" wire:click.prevent="removeItem({{$index}})"><i class="material-icons">delete_outline</i></button>     
                        </div>
                        

                    </div>
                </div>
            @endforeach

        </div>

        
    </div>

    
    <div class="row" wire:ignore.self>
        <div class="col-md-8">
            <div class="card h-100">
                <div class="card-body">
                    <h1 class="card-title">Notes</h1>
                    <textarea rows="5" placeholder="Customer Notes" class="form-control"></textarea>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card h-100">
                <div class="card-body">
                   <div class="mt-2">
                        <h1 class="card-title">Discount</h1>
                        <input type="text" class="form-control" placeholder="Discount">
                    </div> 
                    
                    <div class="mt-2">
                        <h1 class="card-title">Invoice Total</h1>
                    <input type="text" class="form-control" placeholder="Total">
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
