<div>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}

    <div class="page-header">
        <h2 class="header-title">Shopping Area</h2>
        <div class="header-sub-title">
            <nav class="breadcrumb breadcrumb-dash">
                <a href="#" class="breadcrumb-item"><i class="anticon anticon-shopping-cart m-r-5"></i>Shop</a>
                {{-- <a class="breadcrumb-item" href="#">Apps</a>
                <a class="breadcrumb-item" href="#">E-commerce</a> --}}
                <span class="breadcrumb-item active">Products</span>
            </nav>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="row m-b-30">
                <div class="col-md-8">
                    <div class="d-md-flex">
                        <div class="col-md-3 ml-3 mr-3">
                            <div class="form-group">
                                <select class="form-control custom-select" style="min-width: 180px;">
                                    <option selected>Catergory</option>
                                    <option value="all">All</option>
                                    @foreach ($product_categories as $item)    
                                    <option value="$item->name">{{$item->name}}</option>
                                    @endforeach
                                    
                                </select>
                            </div>
                            
                        </div>
                        
                        <div class="col-md-3 mr-3 ml-3">
                            <div class="form-group">
                                <select class="form-control custom-select" style="min-width: 180px;">
                                    <option selected>Status</option>
                                    <option value="all">All</option>
                                    <option value="inStock">In Stock </option>
                                    <option value="outOfStock">Out of Stock</option>
                                </select>
                            </div>
                            
                        </div>

                        <div class="col-md-8 mr-3 ml-3">
                                <div class="input-affix">
                                    <i class="prefix-icon anticon anticon-search opacity-04"></i>
                                    <input type="text" class="form-control" placeholder="Product Search" wire:model='livesearch'>
                                </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 text-right">
                   {{-- @if(Auth::user()->account_status!=0) --}}
                    <a href="{{url('new-product')}}" class="btn btn-primary">
                        <i class="anticon anticon-plus-circle m-r-5"></i>
                        <span>Add Product</span>
                    </a>
                    {{-- @endif --}}
                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-hover e-commerce-table">
                    <thead>
                        <tr>
                            <th>
                                <div class="checkbox">
                                    <input id="checkAll" type="checkbox">
                                    <label for="checkAll" class="m-b-0"></label>
                                </div>
                            </th>
                            {{-- <th>ID</th> --}}
                            <th>Product</th>
                            <th>Category</th>
                            <th>Price</th>
                            <th>Stock Left</th>
                            <th>Status</th>
                            {{-- <th></th> --}}
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $item)
                        <tr>
                            <td>
                                <div class="checkbox">
                                    <input id="check-item-1" type="checkbox">
                                    <label for="check-item-1" class="m-b-0"></label>
                                </div>
                            </td>
                            {{-- <td>
                                #{{$item->id}}
                            </td> --}}
                            <td>
                                <div class="d-flex align-items-center">
                                    <img class="img-fluid rounded" src="images/others/thumb-9.jpg" style="max-width: 60px" alt="">
                                    <h6 class="m-b-0 m-l-10">{{$item->name}}</h6>
                                </div>
                            </td>
                            <td>{{getProductCategory($item->category_id)}}</td>
                            <td>${{$item->price}}</td>
                            <td>{{$item->stock}}</td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="badge badge-success badge-dot m-r-10"></div>
                                    <div>{{$item->status}}</div>
                                </div>
                            </td>
                            {{-- <td class="text-right">
                                <button class="btn btn-icon btn-hover btn-sm btn-rounded pull-right">
                                    <i class="anticon anticon-edit"></i>
                                </button>
                                <button class="btn btn-icon btn-hover btn-sm btn-rounded">
                                    <i class="anticon anticon-delete"></i>
                                </button>
                            </td> --}}
                        </tr>
                        
                        @endforeach
                        
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>




</div>
