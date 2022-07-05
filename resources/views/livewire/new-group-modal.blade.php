<div>
    {{-- Because she competes with no one, no one can compete with her. --}}
     <!-- Button trigger modal -->
     <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#newGroupModal"><i class="anticon anticon-plus-circle m-r-5"></i>
        <span>Register Group</span>
    </button>
    
    <!-- Modal -->
    <div class="modal fade" id="newGroupModal" tabindex="-1" aria-labelledby="newGroupModal" aria-hidden="true" wire:ignore.self>
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="newGroupModal">Register New Group</h5>

                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <div class="row">
    
                            <div class="col-md-12">
                                <label for="group_name" class="float-left">*Group Name</label>
                                <input type="text" name="group_name" id="group_name" class="form-control" placeholder="Group Name" wire:model='group_name'>
                                @error('group_name') <span style="color:red">{{ $message }}</span> @enderror
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
