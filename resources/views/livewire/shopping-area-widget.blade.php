<div>
    {{-- Be like water. --}}
    <div class="example-container">
        <div class="example-content bg-light">
            <div class="page-description page-description-tabbed">
                <h1>Shopping Area</h1>
                <span>Access Products/Services from Approved Businesses</span>

                <ul class="nav nav-tabs mb-3" id="productType" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="products-tab" data-bs-toggle="tab" data-bs-target="#products" type="button" role="tab" aria-controls="products" aria-selected="true">Products</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="services-tab" data-bs-toggle="tab" data-bs-target="#services" type="button" role="tab" aria-controls="services" aria-selected="false">Services</button>
                    </li>
                    
                </ul>

            </div>
        </div>
        
    </div>
   
    <div class="tab-content mt-3 mr-3 ml-3" id="productType">
        <div class="tab-pane fade show active" id="products">
            <div class="row">
                @foreach ($products as $item)
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="widget-popular-product-container">
                                        <div class="widget-popular-product-image">
                                            @if(isset($item->product_image))
                                                <img src="{{asset("$item->product_image")}}" alt="product_image">
                                            @endif 
                                        </div>
                                        <div class="widget-popular-product-tags">
                                            <span class="badge rounded-pill badge-secondary badge-style-light">{{getProductCategory($item->category_id)}}</span>
                                        </div>
                                        <div class="widget-popular-product-content">
                                            <h3 class="widget-popular-product-title">{{$item->name}}</h3>
                                            <p class="widget-popular-product-text m-b-md">{{$item->description}}</p>
                                            {{-- <span class="widget-popular-product-rating">
                                                <i class="material-icons">star</i>
                                                <i class="material-icons">star</i>
                                                <i class="material-icons">star</i>
                                                <i class="material-icons">star</i>
                                                <i class="material-icons">star_half</i>
                                                <span class="widget-popular-product-rating-num">4.4</span>
                                            </span> --}}
                                            <p> {{$item->price}} </p> 

                                            {{-- <button class="btn btn-primary">Add to Cart</button> --}}
                                            <button class="btn btn-primary">Purcahse</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                
                        
                        
                
                        </div>
                @endforeach
            </div>
            
        </div>
        <div class="tab-pane fade show" id="services">
           @foreach ($services as $item)
               {{$item->name}}
               {{$item->description}}
               {{$item->getServicePrice($item->id)}}
           @endforeach
        </div>

    </div>
</div>
