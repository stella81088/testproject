<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */


    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            //creating  columns
            $table->id();
            $table->string('slug'); 
            $table->text('body');
            $table->timestamps(); //add created at and updated at timestamps
            $table->string('title');
            //to schedule future posts and declare nullable, make optional
            $table->timestamp('published_at')->nullable; 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('items');
    }
}
