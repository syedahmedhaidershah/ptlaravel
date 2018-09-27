<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductdetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productdetail', function(Blueprint $table) {
			$table->increments('id')->unsigned();
			$table->longtext('data')->unique();
			$table->softDeletes();
			$table->timestamps();
			$table->engine = "MyISAM";
		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('productdetail');
    }
}
