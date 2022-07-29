<div>
    {{-- Success is as dangerous as failure. --}}

    <div class="page-header">
        <h2 class="header-title">Quotes</h2>
        <div class="header-sub-title">
            <nav class="breadcrumb breadcrumb-dash">
                {{-- <a href="#" class="breadcrumb-item"><i class="anticon anticon-file m-r-5"></i>Invoices</a> --}}
                {{-- <a class="breadcrumb-item" href="#">Apps</a>--}}
                <a class="breadcrumb-item" href="#">Quotes</a> 
                <span class="breadcrumb-item active">List</span>
            </nav>
        </div>
    </div>


    <div class="card">
        <div class="card-body">
            <div class="card-title">
                <h1 class="card-title">Recent Quotes</h1>
                <table class="table">
                    <thead>
                        <th>ID</th>
                        <th>Customer</th>
                        <th>Date</th>
                        <th>Amount</th>
                        <th>Action</th>
                    </thead>

                    @foreach ($quotes as $item)
                        <td> {{$item->id}} </td>
                        <td> {{$item->customer}} </td>
                        <td> {{$item->date}} </td>
                        <td> {{$item->amount}} </td>
                        <td> <div class="row">
                            <div class="cold-md-6">
                                <button class="btn btn-primary">Convert to Invoice</button>
                            </div>
                            <div class="cold-md-6">
                                <button class="btn btn-secondary">Edit</button>
                            </div>
                            <div class="cold-md-6">
                                <button class="btn btn-danger">Delete</button>
                            </div>
                        </div> </td>
                    @endforeach

                </table>
            </div>
        </div>
    </div>

</div>
