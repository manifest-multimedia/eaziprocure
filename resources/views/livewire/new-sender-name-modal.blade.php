<div>
    {{-- The whole world belongs to you. --}}

     <!-- Button trigger modal -->
     <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#newSenderModal"><i class="anticon anticon-plus-circle m-r-5"></i>
        <span>Register Name</span>
    </button>
    
    <!-- Modal -->
    <div class="modal fade" id="newSenderModal" tabindex="-1" aria-labelledby="newSenderModal" aria-hidden="true" wire:ignore.self>
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="newSenderModal">Register New Sender Name</h5>

                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <div class="row">
    
                            <div class="col-md-12">
                                <label for="sender_name" class="float-left">*Sender Name</label>
                                <input type="text" name="sender_name" id="sender_name" class="form-control" placeholder="Sender Name (limit 11 characters)" wire:model='sender_name'>
                                @error('sender_name') <span style="color:red">{{ $message }}</span> @enderror
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
