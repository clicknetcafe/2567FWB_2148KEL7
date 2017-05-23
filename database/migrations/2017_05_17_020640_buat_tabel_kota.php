<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BuatTabelKota extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kota', function(Blueprint $table)
            {
                $table->increments('id');
                $table->integer('wilayah_id')->unsigned();
                $table->string('nama_kota');
                $table->timestamp('updated_at');
                $table->timestamp('created_at');
            });
        Schema::table('kota', function(Blueprint $table)
            {
                $table->foreign('wilayah_id')->references('id')->on('wilayah')->onUpdate('cascade')->onDelete('cascade');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('kota');
    }
}
