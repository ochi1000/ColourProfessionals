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
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function dashboard(){

        $allTransactions = Quotation::count();
        $completedTransactions = Quotation::where('completedTransaction', 1)->get();
        $completedTransactionsCount = count($completedTransactions);
        $ongoingTransactions = $allTransactions - $completedTransactionsCount;
        $totalEarnings = 0;
        $totalBucketsSold = 0; 

        foreach ($completedTransactions as $compTran) {
            $totalEarnings += $compTran->total;
            $totalBucketsSold += $compTran->number_of_paint1_buckets + $compTran->number_of_paint2_buckets + $compTran->number_of_paint3_buckets + $compTran->number_of_paint4_buckets + $compTran->number_of_paint5_buckets + $compTran->number_of_paint6_buckets ;
        }

        $quotations = Quotation::paginate(8);

        return view('admin.dashboard', compact('completedTransactionsCount', 'ongoingTransactions', 'totalEarnings', 'totalBucketsSold','quotations'));
    }  

    

}
