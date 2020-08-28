<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->increments('comp_id');
            $table->string('comp_name', 250)->unique();
            $table->string('comp_address', 500);
            $table->string('comp_mail', 100)->unique();
            $table->integer('comp_phone')->unique();
            $table->string('comp_owner', 250)->nullable();
            $table->string('comp_status', 100);
            $table->timestamp('added_on')->useCurrent();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('companies');
    }
}
