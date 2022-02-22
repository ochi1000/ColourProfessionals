@extends('admin.layouts.app')

@section('title')
<p>Make Quotation</p>
@endsection

@section('content')
<!-- Page wrapper  -->
<!-- ============================================================== -->
<div class="page-wrapper" style="min-height: 250px;">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb bg-white">
        <div class="row align-items-center">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">Edit Quotation</h4>
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
            <form action="{{route('quotations.update', $quotation->id)}}" method="POST">
                @csrf
                {{ method_field('PATCH') }}
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="Full Name">Full Name</label>
                        <input type="text" value="{{$quotation->name}}" required name="name" placeholder="Full Name" class="form-control" >
                    </div>
                    <div class="form-group col-md-6">
                        <label for="Company">Company</label>
                        <input type="text" name="company" value="{{$quotation->company}}" placeholder="Company" class="form-control" >
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="Address">Address</label>
                        <input type="text" required value="{{$quotation->address}}" name="address" placeholder="Address" class="form-control" >
                    </div>
                    <div class="form-group col-md-6">
                        <label for="Phone">Phone</label>
                        <input type="number" required name="phone" value="{{$quotation->phone}}" placeholder="Phone" class="form-control" >
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-12">
                        <label for="Description of Work">Description of Work</label>
                        <input type="text" required value="{{$quotation->description}}" name="description" placeholder="Description" class="form-control" >
                    </div>
                </div>
                <div class="form-inline">
                    <div class="form-check mb-2 mr-sm-2">
                        <input class="form-check-input" type="checkbox" id="inlineFormCheck">
                        <label class="form-check-label" for="inlineFormCheck">
                        Wall Treatment
                        </label>
                    </div>
                    <label class="sr-only" for="inlineFormInputName2">Name</label>
                    <input type="number" name="wall_treatment_price" class="form-control mb-2 mr-sm-2" id="inlineFormInputName2" value="{{$quotation->wall_treatment_price}}" placeholder="Cost of Wall Treatment">
                </div>
                <div class="form-inline">
                    <div class="form-check mb-2 mr-sm-2">
                        <input class="form-check-input" type="checkbox" id="inlineFormCheck">
                        <label class="form-check-label" for="inlineFormCheck">
                        Architectural Design
                        </label>
                    </div>
                    <label class="sr-only" for="inlineFormInputName2">Name</label>
                    <input type="number" value="{{$quotation->design_price}}" name="design_price" class="form-control mb-2 mr-sm-2" placeholder="Cost of Architectural Design">
                </div>
                <div class="form-inline">
                    <div class="form-check mb-2 mr-sm-2">
                        <input class="form-check-input" type="checkbox" id="inlineFormCheck">
                        <label class="form-check-label" for="inlineFormCheck">
                        Labor
                        </label>
                    </div>
                    <label class="sr-only" for="inlineFormInputName2">Name</label>
                    <input type="number" value="{{$quotation->labour_price}}" name="labour_price" class="form-control mb-2 mr-sm-2" id="inlineFormInputName2" placeholder="Cost of Labor">
                </div>
                <div class="form-inline">
                    <div class="form-check mb-2 mr-sm-2">
                        <input class="form-check-input" type="checkbox" id="inlineFormCheck">
                        <label class="form-check-label" for="inlineFormCheck">
                        Transport
                        </label>
                    </div>
                    <label class="sr-only" for="inlineFormInputName2">Name</label>
                    <input type="number" value="{{$quotation->transport_price}}" name="transport_price" class="form-control mb-2 mr-sm-2" id="inlineFormInputName2" placeholder="Cost of Transport">
                </div>

                <br>
                <h5>Products</h5>
                <hr>

                <div class="row">
                    <div class="form-group col-md-4">
                        <label for="exampleFormControlSelect1">Product 1 (Required)</label>
                        <input class="form-control" type="text" value="{{$quotation->paint1}}" name="paint1" placeholder="Product 1" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="Phone">Quantity</label>
                        <input required type="number" value="{{$quotation->number_of_paint1_buckets}}" name="number_of_paint1_buckets" placeholder="Quantity" class="form-control" >
                    </div>
                    <div class="form-group col-md-4">
                        <label for="Phone">Unit Price</label>
                        <input required type="number" value="{{$quotation->unitPriceOfPaint1}}" name="unitPriceOfPaint1" placeholder="Unit Price" class="form-control" >
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="form-group col-md-4">
                        <label for="exampleFormControlSelect1">Product 2</label>
                        <input class="form-control" name="paint2" value="{{$quotation->paint2}}" type="text" placeholder="Product 2">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="Phone">Quantity</label>
                        <input type="number" name="number_of_paint2_buckets" value="{{$quotation->number_of_paint2_buckets}}" placeholder="Quantity" class="form-control" >
                    </div>
                    <div class="form-group col-md-4">
                        <label for="Phone">Unit Price</label>
                        <input type="number" value="{{$quotation->unitPriceOfPaint2}}" name="unitPriceOfPaint2" placeholder="Unit Price" class="form-control" >
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="form-group col-md-4">
                        <label for="exampleFormControlSelect1">Product 3</label>
                        <input class="form-control" value="{{$quotation->paint3}}" name="paint3" placeholder="Product 3" type="text">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="Phone">Quantity</label>
                        <input type="number" value="{{$quotation->number_of_paint3_buckets}}" name="number_of_paint3_buckets" placeholder="Quantity of Buckets" class="form-control" >
                    </div>
                    <div class="form-group col-md-4">
                        <label for="Phone">Unit Price</label>
                        <input type="number" value="{{$quotation->unitPriceOfPaint3}}" name="unitPriceOfPaint3" placeholder="Unit Price" class="form-control" >
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="form-group col-md-4">
                        <label for="exampleFormControlSelect1">Product 4</label>
                        <input class="form-control" value="{{$quotation->paint4}}" name="paint4" placeholder="Product 4" type="text">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="Phone">Quantity</label>
                        <input type="number" value="{{$quotation->number_of_paint4_buckets}}" name="number_of_paint4_buckets" placeholder="Quantity" class="form-control" >
                    </div>
                    <div class="form-group col-md-4">
                        <label for="Phone">Unit Price</label>
                        <input type="number" value="{{$quotation->unitPriceOfPaint4}}" name="unitPriceOfPaint4" placeholder="Unit Price" class="form-control" >
                    </div>
                </div>
                <br>    
                <div class="row">
                    <div class="form-group col-md-4">
                        <label for="exampleFormControlSelect1">Product 5</label>
                        <input class="form-control" value="{{$quotation->paint5}}" name="paint5" placeholder="Product 5" type="text">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="Phone">Quantity</label>
                        <input type="number" value="{{$quotation->number_of_paint5_buckets}}" name="number_of_paint5_buckets" placeholder="Quantity" class="form-control" >
                    </div>
                    <div class="form-group col-md-4">
                        <label for="Phone">Unit Price</label>
                        <input type="number" value="{{$quotation->unitPriceOfPaint5}}" name="unitPriceOfPaint5" placeholder="Unit Price" class="form-control" >
                    </div>
                </div>
                <br>    
                <div class="row">
                    <div class="form-group col-md-4">
                        <label for="exampleFormControlSelect1">Product 6</label>
                        <input class="form-control" value="{{$quotation->paint6}}" name="paint6" placeholder="Product 6" type="text">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="Phone">Quantity</label>
                        <input type="number" value="{{$quotation->number_of_paint6_buckets}}" name="number_of_paint6_buckets" placeholder="Quantity" class="form-control" >
                    </div>
                    <div class="form-group col-md-4">
                        <label for="Phone">Unit Price</label>
                        <input type="number" value="{{$quotation->unitPriceOfPaint6}}" name="unitPriceOfPaint6" placeholder="Unit Price" class="form-control" >
                    </div>
                </div>    
                <br>
                <div class="row">
                    <div class="form-group col-md-4">
                        <label for="exampleFormControlSelect1">Paid Amount</label>
                        <input class="form-control" value="{{$quotation->paidAmount}}" name="paidAmount" placeholder="Paid Amount" type="text">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="form-group col-md-4">
                        <div class="form-check mb-2 mr-sm-2">
                            <input class="form-check-input" <?php if($quotation->completedTransaction == true){ echo 'checked';} ?> type="checkbox" id="inlineFormCheck" name="completedTransaction" value="1">
                            <label class="form-check-label" for="inlineFormCheck">
                            Completed Transaction
                            </label>
                        </div>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>     
            </form>
        </div>
    </div>

@endsection
