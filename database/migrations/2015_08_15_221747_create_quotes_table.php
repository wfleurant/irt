<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quotes', function(Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('body');
            $table->string('body_hash')->index();
            $table->string('notes')->nullable();
            $table->integer('rating')->default(0);
            $table->integer('votes')->unsigned()->default(0);
            $table->integer('score')->default(0);
            $table->boolean('approved')->default(false);
            $table->boolean('flagged')->default(false);
            $table->string('author_addr')->nullable();
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
        Schema::drop('quotes');
    }
}
