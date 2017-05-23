<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BuatTabelBerita extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('berita', function(Blueprint $table)
            {
                $table->increments('id');
                $table->integer('admin_id')->unsigned();
                $table->date('tanggal');
                $table->text('judul');
                $table->text('deskripsi');
                $table->timestamp('updated_at');
                $table->timestamp('created_at');
            });
        Schema::table('berita', function(Blueprint $table)
            {
                $table->foreign('admin_id')->references('id')->on('admin')->onUpdate('cascade')->onDelete('cascade');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('berita');
    }
}
