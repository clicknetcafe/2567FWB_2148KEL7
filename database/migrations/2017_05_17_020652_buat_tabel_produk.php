<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BuatTabelProduk extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produk', function(Blueprint $table)
            {
                $table->increments('id');
                $table->integer('kategori_id')->unsigned();
                $table->integer('cabang_id')->unsigned();
                $table->string('nama_produk');
                $table->integer('harga');
                $table->timestamp('updated_at');
                $table->timestamp('created_at');
            });
        Schema::table('produk', function(Blueprint $table)
            {
                $table->foreign('kategori_id')->references('id')->on('kategori')->onUpdate('cascade')->onDelete('cascade');
                $table->foreign('cabang_id')->references('id')->on('cabang')->onUpdate('cascade')->onDelete('cascade');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('produk');
    }
}
