<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNcustomerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ncustomer', function (Blueprint $table) {
            $table->increments('id');
            $table->string('member_id');
            $table->string('company_name');
            $table->string('business_reg_no');
            $table->string('sst_reg_no');
			$table->string('address_line1');
			$table->string('address_line2');
			$table->string('address_line3');
            $table->integer('country_id')->default(150);
            $table->string('state')->default('Wilayah Persekutuan');
            $table->string('city')->default('Kuala Lumpur');
            $table->string('postcode');
			$table->string('first_name');
			$table->string('last_name');
			$table->string('designation');
			$table->string('mobile_no');
			$table->string('email');
			$table->boolean('registered')->default(false);

			$table->softDeletes();
            $table->timestamps();
			$table->engine = 'MYISAM'; 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('ncustomer');
    }
}
