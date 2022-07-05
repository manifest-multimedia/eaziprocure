<div>
    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}

   <div class="card">
    
    <div class="row m-5">

        <div class="col-md-3 border-end">
            <div>
                All Contacts (0)
                <hr>
            </div> 

            <div>

                <h5>Sender Names</h5>

                <div class="form-group">
                    <select name="groups" id="groups" class="form-select">
                        <option value="">Select Sender</option>
                    </select>
                    <div class="mt-2">

                        <x-new-sender-name-modal />
                        
                    </div>
                </div>
                
            </div>
            <div>

                <h5>Groups</h5>

                <div class="form-group">
                    <select name="groups" id="groups" class="form-select">
                        <option value="">Select Group</option>
                    </select>
                    <div class="mt-2">
                        <x-new-group-name-modal />
                        {{-- <button class="btn btn-primary">+ Add New Group</button> --}}
                    </div>
                </div>
                
            </div>
            
        </div>
        <div class="col-md-9">
            <div class="row">

                <div class="col-md-6">
                    <h2 class="text-center">Contact Manager</h2>
                </div>
                <div class="col-md-6">
                    <div class="btn-group">
                        <x-new-contact-modal />
                        {{-- <button class="btn btn-primary btn-md">+ Add Contact </button> --}}
                        <button class="btn btn-success btn-md">Bulk Upload</button>
                    </div>
                </div>

                <div class="">

                    <table class="table table-hover">
                       <thead>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Group</th>
                       </thead>
                       @if($contacts->count()>0)

                       @foreach ($contacts as $contact)
                           
                       @endforeach
                        <tr>
                            <td>{{$contact->last_name}} {{$contact->first_name}} {{$contact->other_name}}</td>
                            <td>{{$contact->mobile_number}}</td>
                            <td>General</td>
                        </tr>
                        
                        @else

                        <tr> <td>No Contact Found </td></tr>

                        @endif

                    </table>
                </div>

            </div>
        </div>
    </div>

    </div> 
</div>
