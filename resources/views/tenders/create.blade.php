<x-neptune-layout>
    <x-slot name="title">
           Commerce Box &mdash; {{ __('Create New Buying Request') }}
    </x-slot>


    <div class="page-header">
        <h2 class="header-title">New Tender</h2>
        <div class="header-sub-title">
            <nav class="breadcrumb breadcrumb-dash">
                {{-- <a href="#" class="breadcrumb-item"><i class="anticon anticon-file m-r-5"></i>Invoices</a> --}}
                {{-- <a class="breadcrumb-item" href="#">Apps</a>--}}
                <a class="breadcrumb-item" href="#">Tenders</a> 
                <span class="breadcrumb-item active">New Tender</span>
            </nav>
        </div>
    </div>

    <div class="card">

        <div class="card-body">
            <div class="card-title">
                <h1 class="card-title">New Tender</h1>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <label for="title">Request Title</label>
                    <input type="text" name="title" id="title" placeholder="Request TItle" class="form-control">
                </div>
                <div class="col-md-6">
                    <label for="stage">Status</label>
                    <select name="stage" id="stage" class="form-select">
                        <option value="">Select Status</option>
                        <option value="Accepting Applications">Accepting Requests</option>
                        <option value="Sorting Applications">Sorting Requests</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="opening_date">Opening Date</label>
                    <input type="date" name="opening_date" id="opening_date" class="form-control">
                </div>

                <div class="col-md-6">
                    <label for="closing_date">Closing Date</label>
                    <input type="date" name="closing_date" id="closing_date" class="form-control">
                </div>

                <div class="col-md-12">
                    <label for="summary">Request Summary</label>
                    <textarea class="form-control" placeholder="Request Summary"></textarea>
                </div>
                <div class="col-md-12">
                    <label for="summary">Request Details</label>
                    <textarea class="form-control" rows="15" placeholder="Detailed Request"></textarea>
                </div>
                <div class="col-md-3 mt-3">
                    <button class="btn btn-primary">Publish Tender</button>
                </div>

            </div>
        </div>

    </div>

</x-neptune-layout>