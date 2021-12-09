<?php

namespace App\Http\Controllers;
use App\Models\Quotation;
use Illuminate\Http\Request;

class QuotationController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
    */
    public function index()
    {
        return view('admin.dashboard');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.createQuotation');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request) {
            $total = ($request->number_of_paint1_buckets * $request->unitPriceOfPaint1) + ($request->number_of_paint2_buckets * $request->unitPriceOfPaint2) + ($request->number_of_paint3_buckets * $request->unitPriceOfPaint3) + ($request->number_of_paint4_buckets * $request->unitPriceOfPaint4) + ($request->number_of_paint5_buckets * $request->unitPriceOfPaint5) + ($request->number_of_paint6_buckets * $request->unitPriceOfPaint6) ;
            $quotation = Quotation::create([
                'name' => $request->name,
                'quotation_number' => rand(101,999).date("Y"),
                'phone' => $request->phone,
                'address' => $request->address,
                'company' => $request->company,
                'description' => $request->description,
                'wall_treatment_price' => $request->wall_treatment_price,
                'labour_price' => $request->labour_price,
                'total' => $total,
                'design_price' => $request->design_price,
                'transport_price' => $request->transport_price,
                'paint1' => $request->paint1,
                'paint2' => $request->paint2,
                'paint3' => $request->paint3,
                'paint4' => $request->paint4,
                'paint5' => $request->paint5,
                'paint6' => $request->paint6,
                'number_of_paint1_buckets' => $request->number_of_paint1_buckets,
                'number_of_paint2_buckets' => $request->number_of_paint2_buckets,
                'number_of_paint3_buckets' => $request->number_of_paint3_buckets,
                'number_of_paint4_buckets' => $request->number_of_paint4_buckets,
                'number_of_paint5_buckets' => $request->number_of_paint5_buckets,
                'number_of_paint6_buckets' => $request->number_of_paint6_buckets,
                'unitPriceOfPaint1' => $request->unitPriceOfPaint1,
                'unitPriceOfPaint2' => $request->unitPriceOfPaint2,
                'unitPriceOfPaint3' => $request->unitPriceOfPaint3,
                'unitPriceOfPaint4' => $request->unitPriceOfPaint4,
                'unitPriceOfPaint5' => $request->unitPriceOfPaint5,
                'unitPriceOfPaint6' => $request->unitPriceOfPaint6,
            ]);

            if ($quotation) {
                var_dump($quotation);exit;
                return redirect('dashboard')->with('status', 'Profile updated!');
            }else{
                var_dump($quotation);exit;
                return redirect('dashboard')->with('status', 'Error Occured');
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
