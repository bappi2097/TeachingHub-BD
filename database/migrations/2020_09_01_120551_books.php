<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Books extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            
            $table->timestamps();
			$table->bigIncrements('id');
			$table->unsignedInteger('categories_id')->nullable();
			$table->string('title')->nullable();
			$table->string('url')->nullable();
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
        Schema::dropIfExists('books');
    }
}
