<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDescriptionToQuotationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('quotations', function (Blueprint $table) {
            $table->string('description')->nullable();
            $table->integer('number_of_paint1_buckets')->nullable();
            $table->integer('number_of_paint2_buckets')->nullable();
            $table->integer('number_of_paint3_buckets')->nullable();
            $table->integer('transport_price')->nullable();
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
            $table->dropColumn(['description', 'number_of_paint1_buckets', 'number_of_paint2_buckets','number_of_paint3_buckets','transport_price']);
        });
    }
}
