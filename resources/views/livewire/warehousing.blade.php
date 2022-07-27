<div>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}

    <div class="page-header">
        <h2 class="header-title">Warehousing</h2>
        <div class="header-sub-title">
            <nav class="breadcrumb breadcrumb-dash">
                <a href="#" class="breadcrumb-item">Warehousing</a>
                {{-- <a class="breadcrumb-item" href="#">Apps</a>
                <a class="breadcrumb-item" href="#">E-commerce</a> --}}
                <span class="breadcrumb-item active">Overview</span>
            </nav>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <canvas id="chartjs1">Your browser does not support the canvas element.</canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="row m-b-30">
                        <div class="col-md-10">
                            <div class="d-md-flex">
                                <div class="col-md-6 ml-3 mr-3">
                                    <div class="form-group">
                                        <select class="form-control custom-select" style="min-width: 180px;">
                                            <option selected>Location</option>
                                            <option value="all">All</option>


                                        </select>
                                    </div>

                                </div>

                                <div class="col-md-6 mr-3 ml-3">
                                    <div class="form-group">
                                        <select class="form-control custom-select" style="min-width: 180px;">
                                            <option selected>Period</option>
                                            <option value="all">All</option>

                                        </select>
                                    </div>

                                </div>


                            </div>
                        </div>


                    </div>
                    <div class="table-responsive">
                        <table class="table table-hover e-commerce-table">
                            <thead>
                                <tr>
                                    <th>
                                        <div class="checkbox">
                                            <input id="checkAll" type="checkbox">
                                            <label for="checkAll" class="m-b-0"></label>
                                        </div>
                                    </th>
                                    {{-- <th>ID</th> --}}
                                    <th>Product</th>
                                    <th>Category</th>
                                    <th>Price</th>
                                    <th>Stock Left</th>
                                    <th>Status</th>
                                    {{-- <th></th> --}}
                                </tr>
                            </thead>
                            <tbody>



                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        {{-- RIGHT SIDEBAR --}}
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <div class="m-l-10">
                        <h5 class="m-b-0">Inventory Snapshot</h5>

                        <hr style="width: 100%" />
                    </div>

                    <p class="m-t-25">The Current Inventory Snapshot report provides a snapshot of real-time inventory
                        data. You can use it to monitor inventory levels and determine ordering schedules.</p>





                </div>
            </div>

            {{-- QUICK NAVBAR --}}
            <div class="card">
                <div class="card-body">
                    <div class="m-l-10">
                        <h5 class="m-b-0">Quick Nav</h5>
                        <hr style="width: 100%" />
                    </div>

                    <div class="app-menu">
                        <ul class="accordion-menu">
                            <li>
                                <a href="#procurement"><i
                                        class="material-icons has-sub-menu">keyboard_arrow_right</i>Purchasing</a>
                                <ul class="sub-menu" style="">
                                    <li>
                                        <a href="#">Purchase Orders</a>
                                    </li>
                                </ul>
                            </li>

                            <li>
                                <a href="#">Vendors</a>
                            </li>

                            <li>
                                <a href="#finance"><i class="material-icons has-sub-menu">
                                        keyboard_arrow_right</i>Inventory</a>
                                <ul class="sub-menu" style="">
                                    <li>
                                        <a href="#">Products</a>
                                    </li>
                                </ul>
                            </li>

                            <li>
                                <a href="#finance"><i class="material-icons has-sub-menu">
                                        keyboard_arrow_right</i>Sales</a>
                                <ul class="sub-menu" style="">
                                    <li>
                                        <a href="#">Customers</a>
                                    </li>
                                    <li>
                                        <a href="#">Sales Orders</a>
                                    </li>
                                </ul>
                            </li>


                        </ul>
                    </div>





                </div>
            </div>
        </div>
    </div>




</div>
