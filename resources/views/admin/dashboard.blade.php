@extends('admin.layouts.app')

@section('content')
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb bg-white">
        <div class="row align-items-center">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">Dashboard</h4>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">

        <!-- ============================================================== -->
        <!-- Four charts -->
        <!-- ============================================================== -->
        <div class="row justify-content-center">
            <div class="col-lg-3 col-md-12">
                <div class="white-box analytics-info">
                    <h3 class="box-title">Total Earnings</h3>
                    <ul class="list-inline two-part d-flex align-items-center mb-0">
                        <li>
                           
                        </li>
                        <li class="ms-auto"><span class="counter text-success">659</span></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-12">
                <div class="white-box analytics-info">
                    <h3 class="box-title">Completed Transactions</h3>
                    <ul class="list-inline two-part d-flex align-items-center mb-0">
                        <li>
                            
                        </li>
                        <li class="ms-auto"><span class="counter text-success">659</span></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-12">
                <div class="white-box analytics-info">
                    <h3 class="box-title">Ongoing Transactions</h3>
                    <ul class="list-inline two-part d-flex align-items-center mb-0">
                        <li>
                            
                        </li>
                        <li class="ms-auto"><span class="counter text-purple">869</span></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-12">
                <div class="white-box analytics-info">
                    <h3 class="box-title">Quantity of Paint Sold</h3>
                    <ul class="list-inline two-part d-flex align-items-center mb-0">
                        <li>
                            <div id="sparklinedash3"><canvas width="67" height="30"
                                    style="display: inline-block; width: 67px; height: 30px; vertical-align: top;"></canvas>
                            </div>
                        </li>
                        <li class="ms-auto"><span class="counter text-info">911</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- ============================================================== -->
        <!-- PRODUCTS YEARLY SALES -->
        <!-- ============================================================== -->
        <div class="white-box">
        <h3 class="box-title">Quotations and Receipts</h3>
        <br>
        <div class="row">
            <div class="col-sm-2"></div>
            <div class="col-sm-7"><input placeholder="Search For Reference Number" type="number" class="form-control" ></div>
            <div class="col-sm-3 d-flex justify-content-end"><a href="{{ route('quotations.create') }}" class="btn btn-primary">Add Quotation</a></div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-12">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover text-nowrap">
                            <thead>
                                <tr>
                                    <th class="border-top-0">REF N</th>
                                    <th class="border-top-0">Name</th>
                                    <th class="border-top-0">Amount Paid</th>
                                    <th class="border-top-0">Total Cost</th>
                                    <th class="border-top-0">Date</th>
                                    <th class="border-top-0">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Deshmukh</td>
                                    <td>Prohaska</td>
                                    <td>₦1,000,000</td>
                                    <td>admin</td>
                                    <td>admin</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Deshmukh</td>
                                    <td>Gaylord</td>
                                    <td>₦1,000,000</td>
                                    <td>member</td>
                                    <td>member</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Sanghani</td>
                                    <td>Gusikowski</td>
                                    <td>₦1,000,000</td>
                                    <td>developer</td>
                                    <td>developer</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Roshan</td>
                                    <td>Rogahn</td>
                                    <td>₦1,000,000</td>
                                    <td>supporter</td>
                                    <td>supporter</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Joshi</td>
                                    <td>Hickle</td>
                                    <td>₦1,000,000</td>
                                    <td>member</td>
                                    <td>member</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>Nigam</td>
                                    <td>Eichmann</td>
                                    <td>₦1,000,000</td>
                                    <td>supporter</td>
                                    <td>supporter</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
@endsection