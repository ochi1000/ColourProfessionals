<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RenameColumnsQuotationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('quotations', function (Blueprint $table) {
            $table->string('paint5')->nullable();
            $table->string('paint6')->nullable();
            $table->string('number_of_paint5_buckets')->nullable();
            $table->string('number_of_paint6_buckets')->nullable();
            $table->string('unitPriceOfPaint5')->nullable();
            $table->string('unitPriceOfPaint6')->nullable();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
