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
                        <li class="ms-auto"><span class="counter text-success">₦{{number_format($totalEarnings)}}</span></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-12">
                <div class="white-box analytics-info">
                    <h3 class="box-title">Completed Transactions</h3>
                    <ul class="list-inline two-part d-flex align-items-center mb-0">
                        <li>
                            
                        </li>
                        <li class="ms-auto"><span class="counter text-success">
                            {{number_format($completedTransactionsCount)}}
                        </span></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-12">
                <div class="white-box analytics-info">
                    <h3 class="box-title">Ongoing Transactions</h3>
                    <ul class="list-inline two-part d-flex align-items-center mb-0">
                        <li>
                            
                        </li>
                        <li class="ms-auto"><span class="counter text-purple">{{number_format($ongoingTransactions)}}</span></li>
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
                        <li class="ms-auto"><span class="counter text-info">{{number_format($totalBucketsSold)}} <small>Buckets</small></span>
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
        <div class="row">
            <div class="col-sm-2"></div>
            <div class="col-sm-7">
                <!-- <input id="search" name="search" placeholder="Search For Reference Number" type="text" class="form-control"> -->
            </div>
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
                                @foreach($quotations as $quotation)
                                <tr>
                                    <td>{{$quotation->quotation_number}}</td>
                                    <td>{{$quotation->name}}</td>
                                    <td>{{number_format($quotation->paidAmount)}}</td>
                                    <td>{{number_format($quotation->total)}}</td>
                                    <td>{{$quotation->created_at}}</td>
                                    <td>
                                        <span ><a href="{{route('quotations.edit',$quotation->id)}}" class="fas fa-edit"></a> </span>
                                        <span >
                                            <a style="color: black;" class="fas fa-print"></a> 
                                        </span>
                                        <!-- <form action="{{route('quotations.destroy',$quotation->id)}}" method="POST">
                                            @csrf
                                            {{ method_field('DELETE') }} -->
                                            <span >
                                                <a style="color: red;" class="fas fa-trash"></a> 
                                            </span>
                                        <!-- </form> -->

                                    </td>
                                    
                                </tr>
                                @endforeach
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