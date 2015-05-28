<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServicesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
        Schema::create('services',function($table){
            //auto incrementing primary key
            $table->increments('id');
            //creating a column for title
            $table->string('title');
            //create a column for description
            $table->text('description');
            //create special fields created_at and updated_at to store timestamp
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
		//if the migration is reversed
        Schema::drop('services');
	}

}
