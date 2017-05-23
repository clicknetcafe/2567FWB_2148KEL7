<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BuatTabelKomentar extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('komentar', function(Blueprint $table)
            {
                $table->increments('id');
                $table->integer('promo_id')->unsigned();
                $table->text('isi');
                $table->timestamp('updated_at');
                $table->timestamp('created_at');
            });
        Schema::table('komentar', function(Blueprint $table)
            {
                $table->foreign('promo_id')->references('id')->on('promo')->onUpdate('cascade')->onDelete('cascade');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('komentar');
    }
}
