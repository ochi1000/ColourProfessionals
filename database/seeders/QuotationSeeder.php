<?php

namespace Database\Seeders;

use App\Models\Quotation;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class QuotationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $a = 0;
        while ($a <= 20) {
            DB::table('quotations')->insert([
                'name' => Str::random(10),
                'quotation_number' => rand(101,999).date("Y"),
                'phone' => rand(1000000,99999999),
                
            ]);
            $a++;
        }
        
    }
}
