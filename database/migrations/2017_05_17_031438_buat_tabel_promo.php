<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BuatTabelPromo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('promo', function(Blueprint $table)
            {
                $table->increments('id');
                $table->integer('admin_id')->unsigned();
                $table->integer('produk_id')->unsigned();
                $table->string('nama_promo');
                $table->string('isi');
                $table->timestamp('updated_at');
                $table->timestamp('created_at');
            });
        Schema::table('promo', function(Blueprint $table)
            {
                $table->foreign('admin_id')->references('id')->on('admin')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::drop('promo');
    }
}
