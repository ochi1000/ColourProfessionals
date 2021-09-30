<?php

namespace App\Http\Controllers;

use App\Models\Quotation;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function createQuotation(Request $request){

        if($request->has('walltreatment')){
            $this->wallTreatmentPrice = $request->wallTreatmentPrice;
        }else{
            $this->wallTreatment = 0;
        }

        if($request->has('labour')){
            $this->labourPrice = $request->labourPrice;
        }else{
            $this->labourPrice = 0;
        }

        if($request->has('design')){
            $this->designPrice = $request->designPrice;
        }else{
            $this->designPrice = 0;
        }

        if($request->has('transport')){
            $this->transportPrice = $request->transportPrice;
        }else{
            $this->transportPrice = 0;
        }

        $quotation = Quotation::create([
            'name'=>$request->name,
            'quotation_number'=>$request->quotationNumber,
            'user_phone'=>$request->phone,
            'address'=>$request->address,
            'upfront'=>$request->upfront,
            'total'=>$request->total,
            'wall_treatment_price'=>$request->wallTreatmentPrice,
            'labour_price'=>$request->labourPrice,
            'design_price'=>$request->designPrice,
            'transport_price'=>$request->transportPrice,
            'paint1'=>$request->paint1,
            'paint2'=>$request->paint2,
            'paint3'=>$request->paint3,
            'description'=>$request->description,
            'number_of_paint1_buckets'=>$request->numberOfPaint1,
            'number_of_paint2_buckets'=>$request->numberOfPaint2,
            'number_of_paint3_buckets'=>$request->numberOfPaint3,
            'site'=>$request->site,
        ]);

        print($quotation);

    }
}
