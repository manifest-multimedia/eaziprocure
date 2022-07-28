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
            @foreach ($products as $item)
            
            {{$item->product_image}}
            {{$item->name}} 
            {{$item->description}}
            {{$item->price}}

            @endforeach
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
