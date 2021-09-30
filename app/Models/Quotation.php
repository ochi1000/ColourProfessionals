<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quotation extends Model
{
    use HasFactory;

    protected $fillable = ['name','quotation_number','phone','address','upfront','total','paint1','paint2','paint3','wall_treatment_price','labour_price','design_price','site','description', 'number_of_paint1_buckets', 'number_of_paint2_buckets','number_of_paint3_buckets','transport_price'];
}
