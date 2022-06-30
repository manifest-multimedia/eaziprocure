<x-neptune-layout>
    <x-slot name="title">
           Commerce Box &mdash; {{ __('Tenders') }}
    </x-slot>
    <div class="page-header no-gutters">
        <div class="row align-items-md-center">
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-8">
                        <div class="input-affix m-v-10">
                            <i class="prefix-icon anticon anticon-search opacity-04"></i>
                            <input type="text" class="form-control" placeholder="Enter Search Terms">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="text-md-right m-v-10">
                    {{-- <div class="btn-group m-r-10">
                        <button id="list-view-btn" type="button" class="btn btn-default btn-icon" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="List View">
                            <i class="anticon anticon-ordered-list"></i>
                        </button>
                        <button id="card-view-btn" type="button" class="btn btn-default btn-icon active" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Card View">
                            <i class="anticon anticon-appstore"></i>
                        </button>
                    </div> --}}
                    <a href="{{url('new-tender')}}" class="btn btn-primary" 
                    {{-- data-toggle="modal" data-target="#create-new-project" --}}
                    >
                        <i class="anticon anticon-plus"></i>
                        <span class="m-l-5">Create New Tender</span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <x-tender-widget />



</x-neptune-layout>