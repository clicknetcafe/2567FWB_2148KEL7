<?php

use Illuminate\Database\Seeder;

class seeder_tabel_kategori extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kategori')->delete();

        //buat data
		$kategori = array(
			array('id'=>1,'nama_kategori'=> 'Makanan Ringan'),
			array('id'=>2,'nama_kategori'=> 'Minuman'),
			array('id'=>3,'nama_kategori'=> 'Elektronik'),
			array('id'=>4,'nama_kategori'=> 'Es Krim'),
			array('id'=>5,'nama_kategori'=> 'Peralatan Mandi')
		);

		//insert
		DB::table('kategori')->insert($kategori);
    }
}
