<x-backend-layout>
    <x-slot name="title">
           EaziProcure &mdash; {{ __('Tender History') }}
    </x-slot>

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <div class="media align-items-center">
                                    {{-- <div class="avatar avatar-image rounded">
                                        <img src="assets/images/others/thumb-3.jpg" alt="">
                                    </div> --}}
                                    <div class="m-l-10">
                                        <h4 class="m-b-0">Request for Supply of 200 Computers</h4>
                                    </div>
                                </div>
                                <div>
                                    <span class="badge badge-pill badge-blue">In Progress</span>
                                </div>
                            </div>
                            <div class="m-t-40">
                                <h6>Description:</h6>
                                <p> Manifest Multimedia is requesting for the supply of 200 computers for it's newly built office at Swanlake Kaneshie! </p>
                                </div>
                            <div class="d-md-flex m-t-30 align-items-center justify-content-between">
                                {{-- <div class="d-flex align-items-center m-t-10">
                                    <span class="text-dark font-weight-semibold m-r-10 m-b-5">Team: </span>
                                    <a class="m-r-5 m-b-5" href="javascript:void(0);" data-toggle="tooltip" title="Erin Gonzales">
                                        <div class="avatar avatar-image" style="width: 30px; height: 30px;">
                                            <img src="assets/images/avatars/thumb-1.jpg" alt="">
                                        </div>
                                    </a>
                                    <a class="m-r-5 m-b-5" href="javascript:void(0);" data-toggle="tooltip" title="Darryl Day">
                                        <div class="avatar avatar-image" style="width: 30px; height: 30px;">
                                            <img src="assets/images/avatars/thumb-2.jpg" alt="">
                                        </div>
                                    </a>
                                    <a class="m-r-5 m-b-5" href="javascript:void(0);" data-toggle="tooltip" title="Marshall Nichols">
                                        <div class="avatar avatar-image" style="width: 30px; height: 30px;">
                                            <img src="assets/images/avatars/thumb-3.jpg" alt="">
                                        </div>
                                    </a>
                                    <a class="m-r-5 m-b-5" href="javascript:void(0);" data-toggle="tooltip" title="Virgil Gonzales">
                                        <div class="avatar avatar-image" style="width: 30px; height: 30px;">
                                            <img src="assets/images/avatars/thumb-4.jpg" alt="">
                                        </div>
                                    </a>
                                    <a class="m-r-5 m-b-5" href="javascript:void(0);" data-toggle="tooltip" title="Riley Newman">
                                        <div class="avatar avatar-image" style="width: 30px; height: 30px;">
                                            <img src="assets/images/avatars/thumb-6.jpg" alt="">
                                        </div>
                                    </a>
                                    <a class="m-r-5 m-b-5" href="javascript:void(0);" data-toggle="tooltip" title="Pamela Wanda">
                                        <div class="avatar avatar-image" style="width: 30px; height: 30px;">
                                            <img src="assets/images/avatars/thumb-7.jpg" alt="">
                                        </div>
                                    </a>
                                </div> --}}
                                <div class="m-t-10">
                                    <span class="font-weight-semibold m-r-10 m-b-5 text-dark">Created On: </span>
                                    <span>10 Feb 2022</span>
                                </div>
                            </div>
                        </div>
                        <div class="m-t-30">
                            <ul class="nav nav-tabs">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#project-details-tasks">Applicants</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#project-details-comments">Shortlisted Suppliers</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#project-details-attachment">Awarded</a>
                                </li>
                            </ul>
                            {{-- <div class="tab-content m-t-15 p-25">
                                <div class="tab-pane fade show active" id="project-details-tasks">
                                    <div class="checkbox m-b-20">
                                        <input id="task-1" type="checkbox">
                                        <label for="task-1">Irish skinny, grinder affogato</label>
                                    </div>
                                    <div class="checkbox m-b-20">
                                        <input id="task-2" type="checkbox">
                                        <label for="task-2">Let us wax poetic about the beauty of the cheeseburger.</label>
                                    </div>
                                    <div class="checkbox m-b-20">
                                        <input id="task-3" type="checkbox">
                                        <label for="task-3">I'm gonna build me an airport</label>
                                    </div>
                                    <div class="checkbox m-b-20">
                                        <input id="task-4" type="checkbox" checked="">
                                        <label for="task-4">Efficiently unleash cross-media information</label>
                                    </div>
                                    <div class="checkbox m-b-20">
                                        <input id="task-5" type="checkbox" checked="">
                                        <label for="task-5">Here's the story of a man named Brady</label>
                                    </div>
                                    <div class="checkbox m-b-20">
                                        <input id="task-6" type="checkbox" checked="">
                                        <label for="task-6">Bugger bag egg's old boy willy jolly</label>
                                    </div>
                                    <div class="checkbox m-b-20">
                                        <input id="task-7" type="checkbox" checked="">
                                        <label for="task-7">Hand-crafted exclusive finest tote bag Ettinger</label>
                                    </div>
                                    <div class="checkbox m-b-20">
                                        <input id="task-8" type="checkbox" checked="">
                                        <label for="task-8">I'll be sure to note that in my log</label>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="project-details-comments">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item p-h-0">
                                            <div class="media m-b-15">
                                                <div class="avatar avatar-image">
                                                    <img src="assets/images/avatars/thumb-8.jpg" alt="">
                                                </div>
                                                <div class="media-body m-l-20">
                                                    <h6 class="m-b-0">
                                                        <a href="" class="text-dark">Lillian Stone</a>
                                                    </h6>
                                                    <span class="font-size-13 text-gray">28th Jul 2018</span>
                                                </div>
                                            </div>
                                            <p>The palatable sensation we lovingly refer to as The Cheeseburger has a distinguished and illustrious history. It was born from humble roots, only to rise to well-seasoned greatness.</p>
                                        </li>
                                        <li class="list-group-item p-h-0">
                                            <div class="media m-b-15">
                                                <div class="avatar avatar-image">
                                                    <img src="assets/images/avatars/thumb-9.jpg" alt="">
                                                </div>
                                                <div class="media-body m-l-20">
                                                    <h6 class="m-b-0">
                                                        <a href="" class="text-dark">Victor Terry</a>
                                                    </h6>
                                                    <span class="font-size-13 text-gray">28th Jul 2018</span>
                                                </div>
                                            </div>
                                            <p>The palatable sensation we lovingly refer to as The Cheeseburger has a distinguished and illustrious history. It was born from humble roots, only to rise to well-seasoned greatness.</p>
                                        </li>
                                        <li class="list-group-item p-h-0">
                                            <div class="media m-b-15">
                                                <div class="avatar avatar-image">
                                                    <img src="assets/images/avatars/thumb-10.jpg" alt="">
                                                </div>
                                                <div class="media-body m-l-20">
                                                    <h6 class="m-b-0">
                                                        <a href="" class="text-dark">Wilma Young</a>
                                                    </h6>
                                                    <span class="font-size-13 text-gray">28th Jul 2018</span>
                                                </div>
                                            </div>
                                            <p>The palatable sensation we lovingly refer to as The Cheeseburger has a distinguished and illustrious history. It was born from humble roots, only to rise to well-seasoned greatness.</p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="project-details-attachment">
                                    <div class="file" style="min-width: 200px;">
                                        <div class="media align-items-center">
                                            <div class="avatar avatar-icon avatar-cyan rounded m-r-15">
                                                <i class="anticon anticon-file-exclamation font-size-20"></i>
                                            </div>
                                            <div>
                                                <h6 class="mb-0">Mockup.zip</h6>
                                                <span class="font-size-13 text-muted">7MB</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="file" style="min-width: 200px;">
                                        <div class="media align-items-center">
                                            <div class="avatar avatar-icon avatar-blue rounded m-r-15">
                                                <i class="anticon anticon-file-word font-size-20"></i>
                                            </div>
                                            <div>
                                                <h6 class="mb-0">Guideline.doc</h6>
                                                <span class="font-size-13 text-muted">128 KB</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="file" style="min-width: 200px;">
                                        <div class="media align-items-center">
                                            <div class="avatar avatar-icon avatar-gold rounded m-r-15">
                                                <i class="anticon anticon-file-image font-size-20"></i>
                                            </div>
                                            <div>
                                                <h6 class="mb-0">Logo.png</h6>
                                                <span class="font-size-13 text-muted">128 KB</span>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}
                            {{-- </div> --}}
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Activities</h4>
                        </div>
                        <div class="card-body">
                            <ul class="timeline timeline-sm">
                                <li class="timeline-item">
                                    <div class="timeline-item-head">
                                        <div class="avatar avatar-icon avatar-sm avatar-cyan">
                                            <i class="anticon anticon-check"></i>
                                        </div>
                                    </div>
                                    <div class="timeline-item-content">
                                        <div class="m-l-10">
                                            <div class="media align-items-center">
                                                <div class="avatar avatar-image">
                                                    <img src="/images/avatars/thumb-4.jpg" alt="">
                                                </div>
                                                <div class="m-l-10">
                                                    <h6 class="m-b-0">Asa Yentelbah</h6>
                                                    <span class="text-muted font-size-13">
                                                        <i class="anticon anticon-clock-circle"></i>
                                                        <span class="m-l-5">10/02/2022 12:00 PM</span>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="m-t-20">
                                                <p class="m-l-20">
                                                    <span class="text-dark font-weight-semibold">Approved</span> 
                                                    <span class="m-l-5"> Tender Request</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                {{-- <li class="timeline-item">
                                    <div class="timeline-item-head">
                                        <div class="avatar avatar-icon avatar-sm avatar-blue">
                                            <i class="anticon anticon-link"></i>
                                        </div>
                                    </div>
                                    <div class="timeline-item-content">
                                        <div class="m-l-10">
                                            <div class="media align-items-center">
                                                <div class="avatar avatar-image">
                                                    <img src="assets/images/avatars/thumb-8.jpg" alt="">
                                                </div>
                                                <div class="m-l-10">
                                                    <h6 class="m-b-0">Lilian Stone</h6>
                                                    <span class="text-muted font-size-13">
                                                        <i class="anticon anticon-clock-circle"></i>
                                                        <span class="m-l-5">8:34 PM</span>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="m-t-20">
                                                <p class="m-l-20">
                                                    <span class="text-dark font-weight-semibold">Attached file </span> 
                                                    <span class="m-l-5"> Mockup Zip</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="timeline-item">
                                    <div class="timeline-item-head">
                                        <div class="avatar avatar-icon avatar-sm avatar-purple">
                                            <i class="anticon anticon-message"></i>
                                        </div>
                                    </div>
                                    <div class="timeline-item-content">
                                        <div class="m-l-10">
                                            <div class="media align-items-center">
                                                <div class="avatar avatar-image">
                                                    <img src="assets/images/avatars/thumb-1.jpg" alt="">
                                                </div>
                                                <div class="m-l-10">
                                                    <h6 class="m-b-0">Erin Gonzales</h6>
                                                    <span class="text-muted font-size-13">
                                                        <i class="anticon anticon-clock-circle"></i>
                                                        <span class="m-l-5">8:34 PM</span>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="m-t-20">
                                                <p class="m-l-20">
                                                    <span class="text-dark font-weight-semibold">Commented  </span> 
                                                    <span class="m-l-5"> 'This is not our work!'</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="timeline-item">
                                    <div class="timeline-item-head">
                                        <div class="avatar avatar-icon avatar-sm avatar-purple">
                                            <i class="anticon anticon-message"></i>
                                        </div>
                                    </div>
                                    <div class="timeline-item-content">
                                        <div class="m-l-10">
                                            <div class="media align-items-center">
                                                <div class="avatar avatar-image">
                                                    <img src="assets/images/avatars/thumb-6.jpg" alt="">
                                                </div>
                                                <div class="m-l-10">
                                                    <h6 class="m-b-0">Riley Newman</h6>
                                                    <span class="text-muted font-size-13">
                                                        <i class="anticon anticon-clock-circle"></i>
                                                        <span class="m-l-5">8:34 PM</span>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="m-t-20">
                                                <p class="m-l-20">
                                                    <span class="text-dark font-weight-semibold">Commented  </span> 
                                                    <span class="m-l-5"> 'Hi, please done this before tommorow'</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="timeline-item">
                                    <div class="timeline-item-head">
                                        <div class="avatar avatar-icon avatar-sm avatar-red">
                                            <i class="anticon anticon-delete"></i>
                                        </div>
                                    </div>
                                    <div class="timeline-item-content">
                                        <div class="m-l-10">
                                            <div class="media align-items-center">
                                                <div class="avatar avatar-image">
                                                    <img src="assets/images/avatars/thumb-7.jpg" alt="">
                                                </div>
                                                <div class="m-l-10">
                                                    <h6 class="m-b-0">Pamela Wanda</h6>
                                                    <span class="text-muted font-size-13">
                                                        <i class="anticon anticon-clock-circle"></i>
                                                        <span class="m-l-5">8:34 PM</span>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="m-t-20">
                                                <p class="m-l-20">
                                                    <span class="text-dark font-weight-semibold">Removed  </span> 
                                                    <span class="m-l-5"> a file</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </li> --}}
                                <li class="timeline-item">
                                    <div class="timeline-item-head">
                                        <div class="avatar avatar-icon avatar-sm avatar-gold">
                                            <i class="anticon anticon-file-add"></i>
                                        </div>
                                    </div>
                                    <div class="timeline-item-content">
                                        <div class="m-l-10">
                                            <div class="media align-items-center">
                                                <div class="avatar avatar-image">
                                                    <img src="images/avatars/thumb-3.jpg" alt="">
                                                </div>
                                                <div class="m-l-10">
                                                    <h6 class="m-b-0">Johnson Sebire</h6>
                                                    <span class="text-muted font-size-13">
                                                        <i class="anticon anticon-clock-circle"></i>
                                                        <span class="m-l-5">10/02/2022 5:21 PM</span>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="m-t-20">
                                                <p class="m-l-20">
                                                    <span class="text-dark font-weight-semibold">Created  </span> 
                                                    <span class="m-l-5"> Tender Request</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
  


</x-backend-layout>