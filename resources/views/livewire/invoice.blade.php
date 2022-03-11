<div>
    {{-- Because she competes with no one, no one can compete with her. --}}
    <div class="page-header">
        <h2 class="header-title">Invoice</h2>
        <div class="header-sub-title">
            <nav class="breadcrumb breadcrumb-dash">
                <a href="#" class="breadcrumb-item"><i class="anticon anticon-file m-r-5"></i>Invoice</a>
                {{-- <a class="breadcrumb-item" href="#">Pages</a> --}}
                <span class="breadcrumb-item active">View</span>
            </nav>
        </div>
    </div>
    <div class="container">
        <div class="card">
            <div class="card-body">
                <div id="invoice" class="p-h-30">
                    <div class="m-t-15 lh-2">
                        <div class="inline-block">
                            <img class="img-fluid" src="images/logo/logo.png" alt="">
                            <address class="p-l-10">
                                <span class="font-weight-semibold text-dark">{{$from_company}}</span><br>
                                <span>{{$from_address_line_1}}</span><br>
                                <span>{{$from_address_line_2}}</span><br>
                                <abbr class="text-dark" title="Phone">Phone:</abbr>
                                <span>{{$from_contact}}</span>
                            </address>
                        </div>
                        <div class="float-right">
                            <h2>INVOICE</h2>
                        </div>
                    </div>
                    <div class="row m-t-20 lh-2">
                        <div class="col-sm-9">
                            <h3 class="p-l-10 m-t-10">Invoice To:</h3>
                            <address class="p-l-10 m-t-10">
                                <span class="font-weight-semibold text-dark">{{$to_company}}</span><br>
                                <span>{{$to_address_line_1}} </span><br>
                                <span>{{$to_address_line_2}}</span>
                            </address>
                        </div>
                        <div class="col-sm-3">
                            <div class="m-t-80">
                                <div class="text-dark text-uppercase d-inline-block">
                                    <span class="font-weight-semibold text-dark">Invoice No :</span></div>
                                <div class="float-right">#{{$invoice_number}}</div>
                            </div>
                            <div class="text-dark text-uppercase d-inline-block">
                                <span class="font-weight-semibold text-dark">Date :</span>
                            </div>
                            <div class="float-right">{{$invoice_date}}</div>
                        </div>
                    </div>
                    <div class="m-t-20">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Items</th>
                                        <th>Quantity</th>
                                        <th>Price</th>
                                        <th>Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($invoice_items as $item)
                                        
                                    <tr>
                                        <th>{{$item->id}}</th>
                                        <td>{{$item->name}}</td>
                                        <td>{{$item->quantity}}</td>
                                        <td>{{$item->price}}</td>
                                        <td>{{$item->quantity * $item->price}}</td>
                                    </tr>
                                    @endforeach
                                    
                                  
                                </tbody>
                            </table>
                        </div>
                        <div class="row m-t-30 lh-1-8">
                            <div class="col-sm-12">
                                <div class="float-right text-right">
                                    <p>Sub - Total amount: ${{$summary}}</p>
                                    <p>{{$taxes}}</p>
                                    <hr>
                                    <h3><span class="font-weight-semibold text-dark">Total :</span> ${{$total}}</h3>
                                </div>
                            </div>
                        </div>
                        <div class="row m-t-30 lh-2">
                            <div class="col-sm-12">
                                <div class="border-bottom p-v-20">
                                    <p class="text-opacity"><small>{{$note}}</small></p>
                                </div>
                            </div>
                        </div>
                        <div class="row m-v-20">
                            <div class="col-sm-6">
                                <img class="img-fluid text-opacity m-t-5" width="100" src="assets/images/logo/logo.png" alt="">
                            </div>
                            <div class="col-sm-6 text-right">
                                <small><span class="font-weight-semibold text-dark">Phone:</span> {{$business_contact}}</small>
                                <br>
                                <small>{{$business_email}}</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
