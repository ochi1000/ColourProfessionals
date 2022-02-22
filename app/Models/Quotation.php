<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quotation extends Model
{
    use HasFactory;

    protected $fillable = ['name','quotation_number','phone','address','upfront','total','paint1','paint2','paint3','paint4','paint5','paint6','wall_treatment_price','labour_price','design_price','site','description', 'company','number_of_paint1_buckets', 'number_of_paint2_buckets','number_of_paint3_buckets','number_of_paint4_buckets','number_of_paint5_buckets','number_of_paint6_buckets','transport_price','unitPriceOfPaint1','unitPriceOfPaint2','unitPriceOfPaint3','unitPriceOfPaint4','unitPriceOfPaint5','unitPriceOfPaint6','paidAmount','completedTransaction'];
}
