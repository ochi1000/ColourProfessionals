<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuotationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quotations', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->integer('quotation_number');
            $table->string('name')->nullable();
            $table->string('phone')->nullable();
            $table->string('address')->nullable();
            $table->integer('upfront')->nullable();
            $table->integer('total')->nullable();
            $table->integer('wall_treatment_price')->nullable();
            $table->integer('labour_price')->nullable();
            $table->integer('design_price')->nullable();
            $table->string('paint1')->nullable();
            $table->string('paint2')->nullable();
            $table->string('paint3')->nullable();
            $table->string('site')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('quotations');
    }
}
