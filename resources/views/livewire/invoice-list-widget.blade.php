<div>
    {{-- Be like water. --}}
      <!-- Content Wrapper START -->
        <div class="page-header">
            <h2 class="header-title">Inovices</h2>
            <div class="header-sub-title">
                <nav class="breadcrumb breadcrumb-dash">
                    <a href="#" class="breadcrumb-item"><i class="anticon anticon-file m-r-5"></i>Invoices</a>
                    {{-- <a class="breadcrumb-item" href="#">Apps</a>
                    <a class="breadcrumb-item" href="#">E-commerce</a> --}}
                    <span class="breadcrumb-item active">List</span>
                </nav>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="row m-b-30">
                    <div class="col-lg-8">
                        <div class="d-md-flex">
                            <div class="m-b-10">
                                <select class="custom-select" style="min-width: 180px;">
                                    <option selected>Status</option>
                                    <option value="all">All</option>
                                    <option value="approved">Approved</option>
                                    <option value="pending">Pending</option>
                                    <option value="rejected">Rejected</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 text-right">
                        {{-- <button class="btn btn-primary">
                            <i class="anticon anticon-file-excel m-r-5"></i>
                            <span>Export</span>
                        </button> --}}
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
                                <th>ID</th>
                                <th>Customer</th>
                                <th>Date</th>
                                <th>Amount</th>
                                <th>Status</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($invoices as $item)
                                
                            <tr>
                                <td>
                                    <div class="checkbox">
                                        <input id="check-item-1" type="checkbox">
                                        <label for="check-item-1" class="m-b-0"></label>
                                    </div>
                                </td>
                                <td>
                                    #{{$item->id}}
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="avatar avatar-image avatar-sm m-r-10">
                                            <img src="images/avatars/thumb-1.jpg" alt="">
                                        </div>
                                        <h6 class="m-b-0">{{getCustomer($item->customer_id)}}</h6>
                                    </div>
                                </td>
                                <td>{{$item->invoice_date}}</td>
                                <td>${{$item->invoice_total}}</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="badge badge-success badge-dot m-r-10"></div>
                                        <div>{{$invoice_status}}</div>
                                    </div>
                                </td>
                                <td class="text-right">
                                    <button class="btn btn-icon btn-hover btn-sm btn-rounded pull-right">
                                        <i class="anticon anticon-edit"></i>
                                    </button>
                                    <button class="btn btn-icon btn-hover btn-sm btn-rounded">
                                        <i class="anticon anticon-delete"></i>
                                    </button>
                                </td>
                            </tr>
                           
                            @endforeach
                          
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    
</div>
