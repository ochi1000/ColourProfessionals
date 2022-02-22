<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex">

    <title>Invoice</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <style>
        .text-right {
            text-align: right;
        }
        .signatory{
            border-bottom: solid;
        }
    </style>

</head>
<body class="login-page" style="background: white">
<?php 
    $total = ($quotation->number_of_paint1_buckets * $quotation->unitPriceOfPaint1) + ($quotation->number_of_paint2_buckets * $quotation->unitPriceOfPaint2) + ($quotation->number_of_paint3_buckets * $quotation->unitPriceOfPaint3) + ($quotation->number_of_paint4_buckets * $quotation->unitPriceOfPaint4) + ($quotation->number_of_paint5_buckets * $quotation->unitPriceOfPaint5) + ($quotation->number_of_paint6_buckets * $quotation->unitPriceOfPaint6) + $quotation->wall_treatment_price + $quotation->labour_price + $quotation->design_price + $quotation->transport_price ;
?>
    <div>
        <div class="row">
            <div class="col-xs-8">
                <img src="https://colourprofessionals.com.ng/images/colourpro_quotation_logo.png" alt="" >
            </div>

            <div class="col-xs-4">
                @if ($quotation->paidAmount)
                    <h3 class="text-black">INVOICE</h3>
                @else  
                    <h3 class="text-black">QUOTATION</h3>
                @endif
            </div>
            
        </div>

        <div class="row">
            <div class="col-xs-8">
                <h4>To:</h4>
                <address>
                    <p>Name: {{$quotation->name}}</p>
                    <p>Company: {{$quotation->company}}</p>
                    <p>Address: {{$quotation->address}}</p>
                    <p>Phone: {{$quotation->phone}}</p>
                </address>
            </div>

            <div class="col-xs-4">
                <p>Date: {{date('d/m/Y',strtotime($quotation->created_at))}}</p>
                <p>Quotation no: {{$quotation->quotation_number}}</p>
            </div>
        </div>

        <table class="table">
            <thead style="background: #F5F5F5;">
                <tr>
                    <th>Item List</th>
                    <th></th>
                    <th>Qty</th>
                    <th>Unit Price</th>
                    <th >Total </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    @if ($quotation->paint1)
                        <td>{{$quotation->paint1}}</td>
                        <td></td>
                        <td >
                            {{$quotation->number_of_paint1_buckets}}
                        </td>
                        <td >
                            {{$quotation->unitPriceOfPaint1}}
                        </td>
                        <td >
                            <span style="font-family: DejaVu Sans;">&#x20A6;</span>{{number_format($quotation->unitPriceOfPaint1 * $quotation->number_of_paint1_buckets)}}
                        </td>
                    @endif
                </tr>
                @if ($quotation->paint2)
                    <tr>
                        <td>{{$quotation->paint2}}</td>
                        <td></td>
                        <td >
                            {{$quotation->number_of_paint2_buckets}}
                        </td>
                        <td >
                            {{$quotation->unitPriceOfPaint2}}
                        </td>
                        <td >
                            <span style="font-family: DejaVu Sans;">&#x20A6;</span>{{number_format($quotation->unitPriceOfPaint2 * $quotation->number_of_paint2_buckets)}}
                        </td>
                    </tr>
                @endif
                @if ($quotation->paint3)
                    <tr>
                        <td>{{$quotation->paint3}}</td>
                        <td></td>
                        <td >
                            {{$quotation->number_of_paint3_buckets}}
                        </td>
                        <td >
                            {{$quotation->unitPriceOfPaint3}}
                        </td>
                        <td >
                            <span style="font-family: DejaVu Sans;">&#x20A6;</span>{{number_format($quotation->unitPriceOfPaint3 * $quotation->number_of_paint3_buckets)}}
                        </td>
                    </tr>
                @endif
                @if ($quotation->paint4)
                    <tr>
                        <td>{{$quotation->paint4}}</td>
                        <td></td>
                        <td >
                            {{$quotation->number_of_paint4_buckets}}
                        </td>
                        <td >
                            {{$quotation->unitPriceOfPaint4}}
                        </td>
                        <td >
                            <span style="font-family: DejaVu Sans;">&#x20A6;</span>{{number_format($quotation->unitPriceOfPaint4 * $quotation->number_of_paint4_buckets)}}
                        </td>
                    </tr>
                @endif
                @if ($quotation->paint5)
                    <tr>
                        <td>{{$quotation->paint5}}</td>
                        <td></td>
                        <td >
                            {{$quotation->number_of_paint5_buckets}}
                        </td>
                        <td >
                            {{$quotation->unitPriceOfPaint5}}
                        </td>
                        <td >
                            <span style="font-family: DejaVu Sans;">&#x20A6;</span>{{number_format($quotation->unitPriceOfPaint5 * $quotation->number_of_paint5_buckets)}}
                        </td>
                    </tr>
                @endif  
                @if ($quotation->paint6)
                    <tr>
                        <td>{{$quotation->paint6}}</td>
                        <td></td>
                        <td >
                            {{$quotation->number_of_paint6_buckets}}
                        </td>
                        <td >
                            {{$quotation->unitPriceOfPaint6}}
                        </td>
                        <td >
                            <span style="font-family: DejaVu Sans;">&#x20A6;</span>{{number_format($quotation->unitPriceOfPaint6 * $quotation->number_of_paint6_buckets)}}
                        </td>
                    </tr>
                @endif

                @if ($quotation->wall_treatment_price)
                    <tr>
                        <td>Wall Treatment</td>
                        <td></td>
                        <td ></td>
                        <td ></td>
                        <td ><span style="font-family: DejaVu Sans;">&#x20A6;</span>{{number_format($quotation->wall_treatment_price)}}</td>
                    </tr>
                @endif
                @if ($quotation->labour_price)
                    <tr>
                        <td>Labour</td>
                        <td></td>
                        <td ></td>
                        <td ></td>
                        <td ><span style="font-family: DejaVu Sans;">&#x20A6;</span>{{number_format($quotation->labour_price)}}</td>
                    </tr>
                @endif
                @if ($quotation->design_price)
                    <tr>
                        <td>Architectural Design</td>
                        <td></td>
                        <td ></td>
                        <td ></td>
                        <td ><span style="font-family: DejaVu Sans;">&#x20A6;</span>{{number_format($quotation->design_price)}}</td>
                    </tr>
                @endif
                @if ($quotation->transport_price)
                    <tr>
                        <td>Transport</td>
                        <td></td>
                        <td ></td>
                        <td ></td>
                        <td ><span style="font-family: DejaVu Sans;">&#x20A6;</span>{{number_format($quotation->transport_price)}}</td>
                    </tr>
                @endif
            </tbody>
        </table>

            <div class="row">
                <div class="col-xs-6"></div>
                <div class="col-xs-5">
                    <table style="width: 100%">
                        <tbody>
                            <tr class="well" style="padding: 5px">
                                <th style="padding: 5px"><div> Total </div></th>
                                <td style="padding: 5px" ><strong> <span style="font-family: DejaVu Sans;">&#x20A6;</span>{{number_format($total)}} </strong></td>
                            </tr>
                            @if ($quotation->paidAmount)
                            <tr class="well" style="padding: 5px">
                                <th style="padding: 5px"><div> Amount Paid </div></th>
                                <td style="padding: 5px" ><strong> <span style="font-family: DejaVu Sans;">&#x20A6;</span>{{number_format($quotation->paidAmount)}} </strong></td>
                            </tr>
                            <tr class="well" style="padding: 5px">
                                <th style="padding: 5px"><div> Balance </div></th>
                                <td style="padding: 5px" ><strong> <span style="font-family: DejaVu Sans;">&#x20A6;</span>{{number_format($total - $quotation->paidAmount)}} </strong></td>
                            </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>

            <div style="margin-bottom: 0px">&nbsp;</div>

            <div class="row">
                <div class="col-xs-8 invbody-terms">
                    <b>Thank you for using our products and services.</b> 
                    <br>
                    <h4><bold>Terms and Conditions</bold></h4>
                    <ul>
                        <li>At least 60% Deposit required to start work. Balance 40% after completion.</li>
                        <li>All unsigned Colour-pro quotations are valid for 28days, after which should be returned for an updated version </li>
                        <li> Colour-pro charges zero naira for all delivery expenses within the state.
                        </li>
                    </ul>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-12 invbody-terms">
                <p><b>Please contact us, should you have any questions.</b></p>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-4">
                    <p class="signatory text-center" style="margin-bottom: 0.2rem">Engr. Jideofor Tochukwu</p>
                    <p class="text-center">General Manager</p>
                </div>
                <div class="col-xs-2"></div>
                <div class="col-xs-4">
                    <p class="signatory" style="min-height: 1.6rem; margin-bottom:0.2rem;"></p>
                    <p class="text-center">Customer's Signature</p>
                </div>
                <div class="col-xs-2"></div>
            </div>
        </div>

    </body>
    </html>