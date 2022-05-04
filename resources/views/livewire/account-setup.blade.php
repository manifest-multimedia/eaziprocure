<div>
    {{-- The Master doesn't talk, he acts. --}}
    <div class="page-header no-gutters has-tab">
        
        <h2 class="font-weight-normal">Account Setup</h2>
        <ul class="nav nav-tabs">
            <li class="nav-item" wire:ignore>
                <a class="nav-link active" role="tab" data-toggle="tab" href="#tab-account">Step One - Organization Details</a>
            </li>
            @if ($role=="administrator")
            
            <li class="nav-item" wire:ignore>
                <a class="nav-link" role="tab" data-toggle="tab" href="#tab-socials">Step Two - Socials</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" role="tab" data-toggle="tab" href="#tab-verifcation" wire:ignore>Final Step - Verification Documents</a>
            </li>
            @endif
        </ul>
    </div>

    <div class="container mt-5">
        <div class="tab-content m-t-15">
            <div class="tab-pane fade show active" id="tab-account" wire:ignore.self>
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Organization Details</h4>
                    </div>

                    <form enctype="multipart/form-data">
                    <div class="card-body">
                        <div class="media align-items-center">
                            <div class="avatar avatar-image  m-h-10 m-r-15" style="height: 90px !important; width: 90px !important; padding:5px">
                               
                                <img src="{{asset($logo)}}" alt="Logo" style="object-fit:contain !important; padding:5%; margin:auto">
                                
                            </div>
                        
                            <div class="m-l-20 m-r-20">
                                <h5 class="m-b-5 font-size-18">Company Logo</h5>
                                <p class="opacity-07 font-size-13 m-b-0">
                                    Recommended Dimensions: <br>
                                    120x120 Max file size: 2MB
                                </p>
                            </div>
                          
                            <div 
                            x-data="{ isUploading: false, progress: 0 }"
                            x-on:livewire-upload-start="isUploading = true"
                            x-on:livewire-upload-finish="isUploading = false"
                            x-on:livewire-upload-error="isUploading = false"
                            x-on:livewire-upload-progress="progress = $event.detail.progress">
                                <label for="logo" class="btn btn-tone btn-primary">


                                <input type="file" id="logo" style="display:none" wire:model="logo"> Upload </label> 

                                <div x-show="isUploading">
                                    <progress max="100" x-bind:value="progress"></progress>
                                </div>
                                {{-- <button class="btn btn-tone btn-primary">Upload</button> --}}
                            </div>
                        </div>
                        <hr class="m-v-25">
                        
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label class="font-weight-semibold" for="userName">Company Name: </label>
                                    <input type="text" class="form-control" id="userName" placeholder="Company Name" value="{{$company_name}}" wire:model.lazy="company_name">
                                </div>
                                <div class="form-group col-md-6">
                                    <label class="font-weight-semibold" for="email">Company Email:</label>
                                    <input type="text" class="form-control" id="email" placeholder="Company Email" value="{{$company_email}}" wire:model.lazy='company_email'>
                                </div>
                            </div>
                            <h4> Primary User Information </h4> 
                            <hr class="m-v-25">
                            
                            <div class="form-row">
                            <div class="form-group col-md-6">
                                <label class="font-weight-semibold" for="userName">Name:</label>
                                <input type="text" class="form-control" id="userName" placeholder="User Name" value="{{$user->name}}">
                            </div>
                                <div class="form-group col-md-6">
                                    <label class="font-weight-semibold" for="phoneNumber">Mobile Number:</label>
                                    <input type="text" class="form-control" id="phoneNumber" placeholder="Phone Number">
                                </div>
                            </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label class="font-weight-semibold" for="role">Role</label>
                                        
                                        <select name="role" id="" class="form-control" wire:model="role">
                                            <option value="">Select Role in Organization</option>
                                            <option value="staff">Staff </option>
                                            <option value="administrator" selected>Administrator</option>
                                            {{-- <option value=""></option> --}}
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="font-weight-semibold" for="language">Language</label>
                                        <select id="language" class="form-control">
                                            <option>English</option>
                                            <option>French</option>
                                            {{-- <option>German</option> --}}
                                        </select>
                                    </div>
                                </div>
                                
                          
                        </form>


                       

                    </div>
                </div>
                @if($role=='administrator')
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Invite Organization Users</h4>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="form-row">
                                <div class="form-group col-md-5">
                                    <label class="font-weight-semibold" for="UserName">Name:</label>
                                    <input type="text" class="form-control" id="UserName" placeholder="Staff Name" wire:model="StaffName">
                                </div>
                                <div class="form-group col-md-5">
                                    <label class="font-weight-semibold" for="user-email">Email:</label>
                                    <input type="text" class="form-control" id="userEmail" placeholder="Email" wire:model="StaffEmail">
                                </div>
                                
                                <div class="form-group col-md-2">
                                    <a class="btn btn-primary m-t-30" href="#" wire:click='invitation'>Invite</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Company Address</h4>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label class="font-weight-semibold" for="fullAddress">Full Address:</label>
                                    {{-- <input type="text-area" class="form-control" id="fullAddress" > --}}
                                    <textarea name="fulladdress" id="" cols="30" rows="5" placeholder="Full Address" class="form-control" wire:model.lazy="company_address">{{$company_address}}</textarea>
                                </div>
                                <div class="form-group col-md-6">
                                    <label class="font-weight-semibold" for="stateCity">State &amp; City:</label>
                                    <input type="text" class="form-control" id="stateCity" placeholder="State &amp; City" value="{{$company_city}}" wire:model.lazy="company_city">
                                </div>
                                <div class="form-group col-md-6">
                                    <label class="font-weight-semibold" for="language">Country</label>
                                    <select id="country" class="form-control" value="{{$company_country}}" wire:model.lazy="company_country">
                                        <option value="">Select Country</option>
                                        
                                        @foreach ($listcountries as $country)
                                    
                                        <option value="{{$country}}"> {{$country}} </option>
                                        @endforeach
                                        
                                    </select>
                                </div>
                            </div>
                        </form>
                    </div>
                    {{-- <div class="has-tab">
                        <ul class="nav nav-tabs">
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tab-account">Home</a>
                            </li>
                            @if ($role=="administrator")
                            
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tab-socials">Next</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tab-verifcation">Final Step - Verification Documents</a>
                            </li>
                            @endif
                        </ul>
                    </div> --}}

                   
                </div>

                  {{-- Step 1 Next Button --}}
            <div class="col-md-6">
                
                <button id="nextbtn" class="btn btn-primary nextbtn" >Next Step</button>
              </div> 
              {{-- End Step 1 Next Button--}}

            </div>

           
            @endif
            <div class="tab-pane fade" id="tab-socials" wire:ignore.self>
                <div class="row">
                    <div class="col-md-12 mx-auto">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Add Social Profiles for your Organization</h4>
                            </div>
                            <div class="card-body">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item p-h-0">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="d-flex align-items-center">
                                                <div class="avatar avatar-icon" style="color: #4267b1; background: rgba(66, 103, 177, 0.1)">
                                                    <i class="anticon anticon-facebook"></i>
                                                </div>
                                                <div class="font-size-15 font-weight-semibold m-l-15">Facebook {{$facebook_switch}}</div>
                                            </div>

                                            

                                            <div class="d-flex align-items-center">
                                                <label class="m-b-0">https://facebook.com/</label>
                                                <div class="row">
                                                    <div class="col-md-12"><input type="text" placeholder="@username" wire:model.lazy="facebookUpdated" class="form-control"></div>
                                                </div>
                                                        <div class="switch m-t-5 m-l-10">
                                                            <input type="checkbox" id="switch-fb" {{is_null($facebook) ? '' : "checked"}} wire:model="facebook_switch">
                                                            <label for="switch-fb"></label>
                                                        </div>              
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item p-h-0">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="d-flex align-items-center">
                                                <div class="avatar avatar-icon" style="color: #fff; background: radial-gradient(circle at 30% 107%, #fdf497 0%, #fdf497 5%, #fd5949 45%,#d6249f 60%,#285AEB 90%)">
                                                    <i class="anticon anticon-instagram"></i>
                                                </div>
                                                <div class="font-size-15 font-weight-semibold m-l-15">Instagram</div>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <label class="m-b-0">https://instagram.com/ </label>
                                                    <div class="row"><div class="col-md-12"><input type="text" placeholder="@username" wire:model.lazy="instagramUpdated" class="form-control"></div></div>
                                                <div class="switch m-t-5 m-l-10">
                                                    <input type="checkbox" id="switch-inst" {{is_null($instagram) ? '' : "checked"}} disabled>
                                                    <label for="switch-inst"></label>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item p-h-0">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="d-flex align-items-center">
                                                <div class="avatar avatar-icon" style="color: #1ca1f2; background: rgba(28, 161, 242, 0.1)">
                                                    <i class="anticon anticon-twitter"></i>
                                                </div>
                                                <div class="font-size-15 font-weight-semibold m-l-15">Twitter</div>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <label class="m-b-0">https://twitter.com/ </label>
                                                <div class="row"><div class="col-md-12"><input type="text" placeholder="@username" wire:model.lazy="twitterUpdated" class="form-control"></div></div>
                                                <div class="switch m-t-5 m-l-10">
                                                    <input type="checkbox" id="switch-tw" {{is_null($twitter) ? '' : "checked"}} disabled>
                                                    <label for="switch-tw"></label>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item p-h-0">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="d-flex align-items-center">
                                                <div class="avatar avatar-icon" style="color: #d8487e; background: rgba(216, 72, 126, 0.1)">
                                                    <i class="anticon anticon-dribbble"></i>
                                                </div>
                                                <div class="font-size-15 font-weight-semibold m-l-15">Dribbble</div>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <label class="m-b-0">https://dribble.com/</label>
                                                <div class="row"><div class="col-md-12"><input type="text" placeholder="@username" wire:model.lazy="dribbbleUpdated" class="form-control"></div></div>
                                                <div class="switch m-t-5 m-l-10">
                                                    <input type="checkbox" id="switch-dr" {{is_null($dribbble) ? '' : "checked"}} disabled>
                                                    <label for="switch-dr"></label>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item p-h-0">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="d-flex align-items-center">
                                                <div class="avatar avatar-icon" style="color: #323131; background: rgba(50, 49, 49, 0.1)">
                                                    <i class="anticon anticon-github"></i>
                                                </div>
                                                <div class="font-size-15 font-weight-semibold m-l-15">Github</div>

                                            </div>
                                            <div class="d-flex align-items-center">
                                                <label class="m-b-0">https://github.com/ </label>
                                                <div class="row"><div class="col-md-12"><input type="text" 
                                                    placeholder="@username" wire:model.lazy="githubUpdated" class="form-control"></div></div>
                                                <div class="switch m-t-5 m-l-10">
                                                    <input type="checkbox" id="switch-gh" {{is_null($github) ? '' : "checked"}} disabled>
                                                    <label for="switch-gh"></label>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item p-h-0">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="d-flex align-items-center">
                                                <div class="avatar avatar-icon" style="color: #0174af; background: rgba(1, 116, 175, 0.1)">
                                                    <i class="anticon anticon-linkedin"></i>
                                                </div>
                                                <div class="font-size-15 font-weight-semibold m-l-15">Linkedin</div>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <label class="m-b-0">https://linkedin.com/company/</label>
                                                <div class="row"><div class="col-md-12"><input type="text" placeholder="@username" wire:model.lazy="linkedinUpdated" class="form-control"></div></div>
                                                <div class="switch m-t-5 m-l-10">
                                                    <input type="checkbox" id="switch-ln" {{is_null($linkedin) ? '' : "checked"}} disabled>
                                                    <label for="switch-ln"></label>
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                   
                            
                                </ul> 
                            </div>
                        </div>
                    </div>
                </div>
          
            {{-- Step 2 Buttons--}}
            <div class="col-md-6">
                <button id="previousbtn" class="btn btn-primary previousbtn">Previous Step</button>
                <button id="nextbtn" class="btn btn-primary nextbtn" >Next Step</button>
              </div> 
              {{-- End Step 2 Buttons --}}

            </div>

            <div class="tab-pane fade" id="tab-verifcation" wire:ignore.self>
                <div class="row">
                    <div class="col-md-12 mx-auto">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Verification Documents</h4>
                            </div>
                            <div class="card-body">

                               <div class="files" style="padding-bottom:30px">
                                   Upload Required Documents for Verifying Your Organization
                            </div> 
                            <div> 
                                <label> Business Registration Type</label> 
                                <select name="type_of_business" id="business_type" class="form-control" wire:model='registration_type'>
                                    <option value="">Select Business Registration Type</option>
                                    <option value="Sole Proprietorship">Sole Proprietorship</option>
                                    <option value="Company Limited by Shares">Company Limited by Shares</option>
                                    <option value="Company Limited by Guarantee">Company Limited by Guarantee</option>
                                    <option value="Unlimited Company">Unlimited Company</option>
                                    <option value="External Company">External Company</option>

                                </select>
                            </div>  
                            
                            @if ($registration_type=='Sole Proprietorship')
                               
                                <div class="custom-file m-t-30 p-b-50">
                                    <label for="customFile" class="custom-file-label"> Business Registration <label> <input id="customFile"  class="custom-file-input" type="file">
                                </div> 
                                <div class="custom-file" style="padding-bottom:50px">
                                    <label for="customFile" class="custom-file-label"> GRA Registration </label> <input id="customFile"  class="custom-file-input" type="file"> 
                                </div>
                                <a href="#" class="btn btn-primary m-t-10" wire:click='CompleteSetup'> Complete Setup</a>
                            @endif

                            @if ($registration_type=='Company Limited by Shares')
                                
                                <div class="custom-file"  style="padding-bottom:50px; margin-top:30px">

                                    <label for="customFile" class="custom-file-label"> Certificate of Incorporation </label> <input id="customFile"  class="custom-file-input" type="file"> 
                                </div>
                                
                                <div class="custom-file" style="padding-bottom:50px">
                                    <label for="customFile" class="custom-file-label">  Certificate To Commence Business </label> <input id="customFile"  class="custom-file-input" type="file"> 
                                </div>

                                <div class="custom-file" style="padding-bottom:50px">
                                    <label for="customFile" class="custom-file-label"> Tax Clearance Certificate </label><input id="customFile"  class="custom-file-input" type="file">
                                </div>
                                <div class="custom-file" style="padding-bottom:50px">
                                    <label for="customFile" class="custom-file-label"> SSNIT Clearance </label><input id="customFile"  class="custom-file-input" type="file"> 
                                </div>
                                <div class="custom-file" style="padding-bottom:50px">
                                    <label for="customFile" class="custom-file-label"> PPA Certificate </label> <input id="customFile"  class="custom-file-input" type="file"> 
                                </div> 
                                <a href="#" class="btn btn-primary m-t-10"> Complete Setup</a>
                            @endif
                            @if ($registration_type=='Company Limited by Guarantee')
                                
                                <div class="custom-file"  style="padding-bottom:50px; margin-top:30px">

                                    <label for="customFile" class="custom-file-label"> Certificate of Incorporation <label> <input id="customFile"  class="custom-file-input" type="file">
                                </div> 
                                <div class="custom-file" style="padding-bottom:50px">
                                    <label for="customFile" class="custom-file-label">  Certificate To Commence Business </label> <input id="customFile"  class="custom-file-input" type="file"> 
                                </div>
                                <div class="custom-file" style="padding-bottom:50px">
                                    <label for="customFile" class="custom-file-label"> Tax Clearance Certificate </label><input id="customFile"  class="custom-file-input" type="file">
                                </div>
                                <div class="custom-file" style="padding-bottom:50px">
                                    <label for="customFile" class="custom-file-label"> SSNIT Clearance </label><input id="customFile"  class="custom-file-input" type="file"> 
                                </div>
                                <div class="custom-file" style="padding-bottom:50px">
                                    <label for="customFile" class="custom-file-label"> PPA Certificate </label> <input id="customFile"  class="custom-file-input" type="file"> 
                                </div> 
                                <a href="#" class="btn btn-primary m-t-10"> Complete Setup</a>
                            @endif
                            @if ($registration_type=='Unlimited Company')
                                
                                <div class="custom-file"  style="padding-bottom:50px; margin-top:30px">

                                    <label for="customFile" class="custom-file-label"> Certificate of Incorporation <label> <input id="customFile"  class="custom-file-input" type="file">
                                </div> 
                                <div class="custom-file" style="padding-bottom:50px">
                                    <label for="customFile" class="custom-file-label">  Certificate To Commence Business </label> <input id="customFile"  class="custom-file-input" type="file"> 
                                </div>
                                <div class="custom-file" style="padding-bottom:50px">
                                    <label for="customFile" class="custom-file-label"> Tax Clearance Certificate </label><input id="customFile"  class="custom-file-input" type="file">
                                </div>
                                <div class="custom-file" style="padding-bottom:50px">
                                    <label for="customFile" class="custom-file-label"> SSNIT Clearance </label><input id="customFile"  class="custom-file-input" type="file"> 
                                </div>
                                <div class="custom-file" style="padding-bottom:50px">
                                    <label for="customFile" class="custom-file-label"> PPA Certificate </label> <input id="customFile"  class="custom-file-input" type="file"> 
                                </div> 
                                <a href="#" class="btn btn-primary m-t-10"> Complete Setup</a>
                            @endif
                            @if ($registration_type=='External Company')
                                
                                <div class="custom-file"  style="padding-bottom:50px; margin-top:30px">

                                    <label for="customFile" class="custom-file-label"> Certificate of Incorporation <label> <input id="customFile"  class="custom-file-input" type="file">
                                </div> 
                                <div class="custom-file" style="padding-bottom:50px">
                                    <label for="customFile" class="custom-file-label">  Certificate To Commence Business </label> <input id="customFile"  class="custom-file-input" type="file"> 
                                </div>
                                <div class="custom-file" style="padding-bottom:50px">
                                    <label for="customFile" class="custom-file-label"> Tax Clearance Certificate </label><input id="customFile"  class="custom-file-input" type="file">
                                </div>
                                <div class="custom-file" style="padding-bottom:50px">
                                    <label for="customFile" class="custom-file-label"> SSNIT Clearance </label><input id="customFile"  class="custom-file-input" type="file"> 
                                </div>
                                <div class="custom-file" style="padding-bottom:50px">
                                    <label for="customFile" class="custom-file-label"> PPA Certificate </label> <input id="customFile"  class="custom-file-input" type="file"> 
                                </div> 
                                <a href="#" class="btn btn-primary m-t-10"> Complete Setup</a>
                            @endif

             
                                                               
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>



        </div>

      {{-- <a href="#tab-socials" data-toggle="tab"> Next</a> --}}
        

</div>
