<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string("name");
            $table->string("type")->nullable();
            $table->string("code")->nullable();
            $table->string("vendor")->nullable();
            $table->string("retail_price")->nullable();
            $table->string("bought_price")->nullable();
            $table->string("total_quantity")->nullable();
            $table->string("withdrawn_quantity")->nullable();
            $table->string("available_quantity")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
