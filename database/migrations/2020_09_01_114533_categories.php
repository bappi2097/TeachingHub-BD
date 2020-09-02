<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Categories extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            
            $table->timestamps();
			$table->bigIncrements('id');
			$table->unsignedInteger('class_id')->nullable();
			$table->string('title')->nullable();
			$table->string('slug')->nullable();
			$table->string('image')->nullable();
			$table->integer('position')->nullable();
			$table->boolean('active')->nullable();
			
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
    }
}
