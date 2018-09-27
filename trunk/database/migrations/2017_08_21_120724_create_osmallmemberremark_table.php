<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOsmallmemberremarkTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('osmallmemberremark', function (Blueprint $table) {
            $table->increments('id');
			$table->integer('member_id')->unsigned();
			$table->integer('remark_id')->unsigned();

            $table->softDeletes();
            $table->timestamps();
            $table->engine = "MYISAM";
        }); 
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('osmallmemberremark');
    }
}
