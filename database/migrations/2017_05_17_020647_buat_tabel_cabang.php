<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BuatTabelCabang extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cabang', function(Blueprint $table)
            {
                $table->increments('id');
                $table->integer('kota_id')->unsigned();
                $table->string('nama_cabang');
                $table->string('alamat_cabang');
                $table->timestamp('updated_at');
                $table->timestamp('created_at');
            });
        Schema::table('cabang', function(Blueprint $table)
            {
                $table->foreign('kota_id')->references('id')->on('kota')->onUpdate('cascade')->onDelete('cascade');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('cabang');
    }
}
