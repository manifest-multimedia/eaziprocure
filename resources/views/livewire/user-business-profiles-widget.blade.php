<div>
    {{-- Do your work, then step back. --}}

   

    <div class="card" id="blockui-card-1">
        <div class="card-body">

            <h1 class="card-title"> Your Business Profiles</h1>

            <table class="table">

                <thead class="table-dark">
                 
                    <th>Name of Business</th>
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
                    <td>{{getOrganizationStatus($item->org_id)}}</td>
                    <td>
                        <button class="btn btn-danger"  id="revoke-business">Revoke Business</button>
                    </td>
                </tr>
                @endforeach
            </table>

        </div>
    </div>


   
    

</div>
