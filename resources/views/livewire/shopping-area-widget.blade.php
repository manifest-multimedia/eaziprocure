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
                @if (isset($products) && $products->count()>0)
                    
               
                    @foreach ($products as $item)
                            <div class="col-md-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="widget-popular-product-container">
                                            <div class="widget-popular-product-image">
                                                @if(isset($item->product_image))
                                                  <a href="{{url("p/details/$item->id")}}"> <img src="{{Storage::url($item->product_image)}}" alt="product_image" width="100%"> </a>
                                                @endif 
                                            </div>
                                            <div class="widget-popular-product-tags">
                                               <a href="{{url("business/$item->owner")}}"> <span class="badge rounded-pill badge-primary badge-style-light">{{getOrganizationName($item->owner)}}</span> </a>
                                                <a href="{{url("p/category/$item->category_id")}}"> <span class="badge rounded-pill badge-secondary badge-style-light">{{getProductCategory($item->category_id)}}</span></a>
                                            </div>
                                            <div class="widget-popular-product-content">
                                                <p> <a class="widget-popular-product-text" style="text-decoration:none" href="{{url("p/details/$item->id")}}"> {{$item->name}}</a></p>
                                                <p style="color:blue; font-weight:400; font-size:18px"> <a href="{{url("p/details/$item->id")}}" style="text-decoration:none"> {{getOrgCurrencySymbol($item->owner)}}{{$item->price}} </a></p> 
                                               
                                                {{-- <h3 class="widget-popular-product-title">{{$item->name}}</h3> --}}
                                                {{-- <p class="widget-popular-product-text m-b-md">{{$item->description}}</p> --}}
                                                
                                                {{-- <span class="widget-popular-product-rating">
                                                    <i class="material-icons">star</i>
                                                    <i class="material-icons">star</i>
                                                    <i class="material-icons">star</i>
                                                    <i class="material-icons">star</i>
                                                    <i class="material-icons">star_half</i>
                                                    <span class="widget-popular-product-rating-num">4.4</span>
                                                </span> --}}

                                               
                                            </div>
                                        </div>
                                    </div>
                                </div>
                    
                            </div>
                    @endforeach
                @endif
            </div>
            
        </div>
        <div class="tab-pane fade show" id="services">
            @if (isset($services) && $services->count()>0)
                @foreach ($services as $item)
                    {{$item->name}}
                    {{$item->description}}
                    {{$item->getServicePrice($item->id)}}
                @endforeach
            @endif
        </div>

    </div>
</div>
