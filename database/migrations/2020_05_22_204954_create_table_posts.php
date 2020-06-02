<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablePosts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id() ;
            $table->string('title') ;
            $table->longText('content') ;
            $table->string('photo')->nullable() ; 
            $table->boolean('is_published')->default(0) ;
            $table->foreignId('user_id')->constrained();
            $table->timestamps() ;
            $table->softDeletes('deleted_at',0) ;

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
