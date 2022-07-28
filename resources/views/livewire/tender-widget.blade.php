<div>
    {{-- Nothing in the world is as soft and yielding as water. --}}
    <div class="row">
       
        @foreach ($tenders as $item)
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div class="media">
                            
                                <div class="m-l-10"> 
                                    <h5 class="m-b-0">{{$item->title}}</h5>
                                    <span class="text-muted font-size-13">Closing Date: {{$item->closing_date}}</span>
                                    <hr />
                                </div>
                            </div>
                            <div class="dropdown dropdown-animated scale-left">
                                <a class="text-gray font-size-18 text-decoration-none" href="javascript:void(0);" data-toggle="dropdown">
                                    <i class="anticon anticon-ellipsis"></i>
                                </a>
                                <div class="dropdown-menu">
                                    <button class="dropdown-item" type="button">
                                        <i class="anticon anticon-eye"></i>
                                        <span class="m-l-10">View</span>
                                    </button>
                                    <button class="dropdown-item" type="button">
                                        <i class="anticon anticon-edit"></i>
                                        <span class="m-l-10">Apply</span>
                                    </button>
                                    {{-- <button class="dropdown-item" type="button">
                                        <i class="anticon anticon-delete"></i>
                                        <span class="m-l-10">Delete</span>
                                    </button> --}}
                                </div>
                            </div>
                        </div>
                        <p class="m-t-25">{{$item->summary}}</p>

                        <span class="text-muted font-size-13">By: {{getOrganizationName($item->id)}}</span>

                        <div class="m-t-30">
                            <div class="d-flex justify-content-between">
                                <span class="font-weight-semibold">Status</span>
                                <span class="font-weight-semibold">{{$item->stage}}</span>
                            </div>
                            <div class="progress progress-sm m-t-10">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 100%"></div>
                            </div>
                        </div>
                        <div class="m-t-20">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <span class="badge badge-info">{{$item->status}}</span>
                                </div>
                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        
    </div>
</div>
