<div>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    <table class="table table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>Customer</th>
                <th>Date</th>
                <th>Amount</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>

           
            @foreach ($transactions as $item)
                
            <tr>
                <td>#{{$item->id}}</td>
                <td>
                    <div class="d-flex align-items-center">
                        <div class="d-flex align-items-center">
                            <div class="avatar avatar-image" style="height: 30px; min-width: 30px; max-width:30px">
                                <img src="{{getCustomerLogo($item->customer_id)}}" alt="Logo">
                            </div>
                            <h6 class="m-l-10 m-b-0">{{getCustomerName($item->customer_id)}}</h6>
                        </div>
                    </div>
                </td>
                <td>{{$item->transaction_date}}</td>
                <td>{{$item->amount}}</td>
                <td>
                    <div class="d-flex align-items-center">
                        @switch($item->status)
                            @case('Approved')
                            <span class="badge badge-success badge-dot m-r-10"></span>
                            <span>{{$item->status}}</span>
                                
                                @break
                            @case('Pending')
                            <span class="badge badge-warning badge-dot m-r-10"></span>
                            <span>{{$item->status}}</span>
                                @break
                            @default        
                        @endswitch
                    </div>
                </td>
            </tr>

            @endforeach
            
           
        </tbody>
       
    </table>
</div>
