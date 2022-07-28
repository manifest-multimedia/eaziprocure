<div>
    {{-- The whole world belongs to you. --}}
    <div class="page-header no-gutters">
        <div class="row align-items-md-center">
            <div class="col-md-6">
                <div class="media m-v-10">
                    <div class="avatar avatar-cyan avatar-icon avatar-square">
                        <i class="anticon anticon-star"></i>
                    </div>
                    <div class="media-body m-l-15">
                        <h6 class="mb-0">All Organizations</h6>
                        <span class="text-gray font-size-13">Interact with Verified Business Entities</span>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                {{-- <div class="text-md-right m-v-10">
                    <div class="btn-group">
                        <button id="list-view-btn" type="button" class="btn btn-default btn-icon">
                            <i class="anticon anticon-ordered-list"></i>
                        </button>
                        <button id="card-view-btn" type="button" class="btn btn-default btn-icon active">
                            <i class="anticon anticon-appstore"></i>
                        </button>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-11 mx-auto">
            <!-- Card View -->
            <div class="row" id="card-view">
                @foreach ($organizations as $item)
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="m-t-20 text-center">
                                <div class="avatar avatar-image" style="height: 100px; width: 100px;">
                                    <img src="{{Storage::url(getCustomerLogo($item->id))}}" alt="Logo">
                                </div>
                                <h4 class="m-t-30">{{$item->org_name}}</h4>
                                {{-- <p>{{$item->org_email}}</p> --}}
                            </div>
                            <div class="text-center m-t-15">
                                {{-- <button class="m-r-5 btn btn-icon btn-hover btn-rounded">
                                    <i class="anticon anticon-facebook"></i>
                                </button>
                                <button class="m-r-5 btn btn-icon btn-hover btn-rounded">
                                    <i class="anticon anticon-twitter"></i>
                                </button>
                                <button class="m-r-5 btn btn-icon btn-hover btn-rounded">
                                    <i class="anticon anticon-instagram"></i>
                                </button> --}}
                            </div>
                            <div class="text-center m-t-30">
                                <a href="{{url("org-profiles/$item->id")}}" class="btn btn-primary btn-tone">
                                    <i class="anticon anticon-profile"></i>
                                    <span class="m-l-5">Profile</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                
                @endforeach
               
                
                
                
                
                
            </div>
            
        </div>
    </div>
</div>
