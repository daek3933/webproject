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
            $table->id();
            $table->increments('pro_id');
            $table->string('pro_name', 500);
            $table->integer('pro_price');
            $table->string('pro_category');
            $table->string('pro_company');
            $table->timestamps();

            $table->foreign('pr_category')->references('cate_id')->on('pro_categories');
            $table->foreign('pro_company')->references('comp_id')->on('companies');
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
