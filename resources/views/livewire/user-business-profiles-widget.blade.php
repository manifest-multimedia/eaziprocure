<div>
    {{-- Do your work, then step back. --}}

    <div class="page-header">
        <h2 class="header-title">Business Profiles</h2>
        <div class="header-sub-title">
            <nav class="breadcrumb breadcrumb-dash">
                {{-- <a href="#" class="breadcrumb-item"><i class="anticon anticon-file m-r-5"></i>Invoices</a> --}}
                {{-- <a class="breadcrumb-item" href="#">Apps</a>
                <a class="breadcrumb-item" href="#">E-commerce</a> --}}
                <span class="breadcrumb-item active">Business Profiles</span>
            </nav>
        </div>
    </div>

    <div class="card" id="blockui-card-1">
        <div class="card-body">

            {{-- <h1 class="card-title"> Your Business Profiles</h1> --}}

            <table class="table">

                <thead class="table-dark">
                 
                    <th>Name of Business</th>
                    <th> Email </th> 
                    <th> Default Currency</th>
                    <th>Status</th>
                    <th>Action</th>
                </thead>
                @foreach ($profiles as $item)
                <tr>
                    <td>
                        @if(getOrganizationName($item->org_id)=="No Name Found, Update Profile")
                        <a href="{{url("account-setup")}}"> 
                        {{getOrganizationName($item->org_id)}}</a>
                        @else
                        {{getOrganizationName($item->org_id)}}
                        @endif 
                    </td>
                    <td>{{getOrgEmail($item->org_id)}}</td>
                    
                    <td>
                        {{getOrgCurrency($item->org_id)}} 
                    </td>
                    <td>{{getOrganizationStatus($item->org_id)}}</td>
                    <td>
                        <div class="row">
                            <div class="col-md-6">

                                <button class="btn btn-danger"  id="revoke-business">Revoke</button>
                            </div>
                            <div class="col-md-6">

                                <button class="btn btn-primary"  id="udpate-business">Update</button>
                            </div>
                        </div>
                    </td>
                </tr>
                @endforeach
            </table>

        </div>
    </div>


   
    

</div>
