<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVideosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('videos', function (Blueprint $table) {
            $table->id();
            $table->string('name');  
            $table->text('des');
            $table->string('meta_keywords');
            $table->string('meta_des');
            $table->string('youtube');
            $table->boolean('published')->default(1);
            $table->integer('user_id')->unsigned()->nullable(); //fk => users           
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->integer('category_id')->unsigned()->nullable(); //fk => roles            
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            //$table->string('image');
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
        Schema::dropIfExists('videos');
    }
}
