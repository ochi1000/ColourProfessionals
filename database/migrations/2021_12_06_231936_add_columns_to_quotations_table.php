<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToQuotationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('quotations', function (Blueprint $table) {

            $table->string('number_of_paint4_buckets')->nullable();
            $table->string('unitPriceOfPaint1')->nullable();
            $table->string('unitPriceOfPaint2')->nullable();
            $table->string('unitPriceOfPaint3')->nullable();
            $table->string('unitPriceOfPaint4')->nullable();
            $table->string('paint4')->nullable();
            $table->integer('company')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('quotations', function (Blueprint $table) {
            //
        });
    }
}
