@extends('admin.layouts.app')

@section('title')
<p>Make Quotation</p>
@endsection

@section('content')
<!-- Page wrapper  -->
<!-- =================Page wrapper div tag closes in the footer============================================= -->
<div class="page-wrapper" style="min-height: 250px;">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb bg-white">
        <div class="row align-items-center">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">Quotations</h4>
            </div>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <div class="white-box">
        <h3 class="box-title">Quotations and Receipts</h3>
        <div class="row">
            <div class="col-sm-2"></div>
            <div class="col-sm-7">
            </div>
            <div class="col-sm-3 d-flex justify-content-end"><a href="{{ route('quotations.create') }}" class="btn btn-primary">Add Quotation</a></div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-12">
                @if ($message = Session::get('success'))
                <div class="alert alert-success alert-block">
                    <!-- <button type="button" class="close" data-dismiss="alert">×</button> -->
                    <strong>{{ $message }}</strong>
                </div>
                @endif

                @if ($message = Session::get('error'))
                <div class="alert alert-danger alert-block">
                    <!-- <button type="button" class="close" data-dismiss="alert">×</button> -->
                    <strong>{{ $message }}</strong>
                </div>
                @endif
                <div class="table-responsive">
                    <table id="tableSearch" class=" nowrap table table-hover table-striped" cellspacing="3" width="100%">
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
                                        <a href="{{url('quotations/print',$quotation->id)}}" style="color: black;" class="fas fa-print"></a> 
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

@endsection
