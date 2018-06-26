<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title', 128)->default('');
            $table->integer('publish_time')->default(0);
            $table->integer('click')->default(0);
            $table->integer('cate_id')->default(0);
            $table->text('content')->default('');
            $table->integer('create_time')->default(0);
            $table->integer('update_time')->default(0);
            $table->tinyInteger('is_delete');
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
        Schema::drop('articles');
    }
}
