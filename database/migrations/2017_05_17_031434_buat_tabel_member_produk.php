<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BuatTabelMemberProduk extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('member_produk', function(Blueprint $table)
            {
                $table->increments('id');
                $table->integer('member_id')->unsigned();
                $table->integer('produk_id')->unsigned();
                $table->timestamp('updated_at');
                $table->timestamp('created_at');
            });
        Schema::table('member_produk', function(Blueprint $table)
            {
                $table->foreign('member_id')->references('id')->on('member')->onUpdate('cascade')->onDelete('cascade');
                $table->foreign('produk_id')->references('id')->on('produk')->onUpdate('cascade')->onDelete('cascade');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('member_produk');
    }
}
