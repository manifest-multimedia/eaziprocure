<div>
    {{-- The best athlete wants his opponent at his best. --}}
    <div>
        {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    
        <div class="page-header">
            <h2 class="header-title">Stock Management</h2>
            <div class="header-sub-title">
                <nav class="breadcrumb breadcrumb-dash">
                    <a href="#" class="breadcrumb-item"><i class="anticon anticon-shopping-cart m-r-5"></i>Warehousing</a>
                    {{-- <a class="breadcrumb-item" href="#">Apps</a>
                    <a class="breadcrumb-item" href="#">E-commerce</a> --}}
                    <span class="breadcrumb-item active">Stock Management</span>
                </nav>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="row m-b-30">
                    <div class="col-md-8">
                        <div class="d-md-flex">
                            
                            
                            <div class="col-md-12 mr-3 ml-3">
                                <label for="product_search">Product Name</label>
                                    <div class="input-affix">
                                        <i class="prefix-icon anticon anticon-search opacity-04"></i>
                                        <input type="text" class="form-control" placeholder="Product Search" wire:model='livesearch'>
                                    </div>
                            </div>
                        </div>
                    </div>
    
                    
                </div>
                <div class="table-responsive">
                    <table class="table table-hover e-commerce-table">
                        <thead>
                            <tr>
                                {{-- <th>
                                    <div class="checkbox">
                                        <input id="checkAll" type="checkbox">
                                        <label for="checkAll" class="m-b-0"></label>
                                    </div>
                                </th> --}}
                                {{-- <th>ID</th> --}}
                                <th>Name</th>
                                <th>Quantity</th>
                                <th>Total Cost</th>
                                <th>Total Price</th>
                                <th>Action</th>
                                {{-- <th></th> --}}
                            </tr>
                        </thead>
                        <tbody>
                            @if(isset($products))
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
                                    
                                </tr>
                                
                                @endforeach
                                @endif
                                
                            </tbody>
                    </table>
                </div>
            </div>
        </div>
    
    
    
    
    </div>
    
</div>
