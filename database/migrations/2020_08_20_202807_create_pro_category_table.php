<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pro_categories', function (Blueprint $table) {
            $table->increments('cate_id');
            $table->string('cate_name', 250)->unique();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pro_categories', function (Blueprint $table) {
            Schema::dropIfExists('pro_categories');
        });
    }
}
