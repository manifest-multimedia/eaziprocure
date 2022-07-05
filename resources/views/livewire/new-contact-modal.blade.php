<div>
    {{-- The Master doesn't talk, he acts. --}}
    <div>
        {{-- Because she competes with no one, no one can compete with her. --}}
    
    
        <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#newContactModal"><i class="anticon anticon-plus-circle m-r-5"></i>
        <span>Add Contact</span>
    </button>
    
    <!-- Modal -->
    <div class="modal fade" id="newContactModal" tabindex="-1" aria-labelledby="newContactModal" aria-hidden="true" wire:ignore.self>
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="newContactModal">Add New Contact</h5>

                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <div class="row">
    
                            <div class="col-md-6">
                                <label for="first_name" class="float-left">*First Name</label>
                                <input type="text" name="first_name" id="first_name" class="form-control" placeholder="First Name" wire:model='first_name'>
                                @error('first_name') <span style="color:red">{{ $message }}</span> @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="last_name" class="float-left">Last Name</label>
                                <input type="text" name="last_name" id="last_name" class="form-control" placeholder="Last Name" wire:model='last_name'> 
                                @error('last_name') <span style="color:red">{{ $message }}</span> @enderror
                            </div>
    
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <div class="row">
                            
                            <div class="col-md-6">
                                <label for="other_names" class="float-left">Other Names</label>
                                <input type="text" class="form-control" name="other_names" id="other_names" placeholder="Other Names" wire:model='other_names'>
                                @error('other_names') <span style="color:red">{{ $message }}</span> @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="mobile" class="float-left">*Mobile</label>
                                <input type="text" class="form-control" name="mobile" id="mobile" placeholder="Mobile" wire:model='mobile'>
                                @error('mobile') <span style="color:red">{{ $message }}</span> @enderror
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            
                            <div class="col-md-6">
                                <label for="date_of_birth" class="float-left">Date of Birth</label>
                                <input type="date" class="form-control" name="date_of_birth" id="date_of_birth" placeholder="Date of Birth" wire:model='date_of_birth'>
                                @error('date_of_birth') <span style="color:red">{{ $message }}</span> @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="occupation" class="float-left">Occupation</label>
                                <input type="text" class="form-control" name="occupation" id="occupation" placeholder="Occupation" wire:modl='occupation'>
                                @error('occupation') <span style="color:red">{{ $message }}</span> @enderror
                            </div>
                            
                        </div>
                    </div>
                    
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" wire:click='save' >Save changes</button>
                </div>
            </div>
        </div>
    </div>
    
    
    </div>
    
</div>
