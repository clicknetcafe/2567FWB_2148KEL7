<?php

use Illuminate\Database\Seeder;

class seeder_tabel_wilayah extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //mengosongkan tabel
        DB::table('wilayah')->delete();

        //buat data
		$wilayah = array(
			array('id'=>1,'nama_wilayah'=> 'Kalimantan Utara'),
			array('id'=>2,'nama_wilayah'=> 'Kalimantan Timur'),
			array('id'=>3,'nama_wilayah'=> 'Kalimantan Selatan'),
			array('id'=>4,'nama_wilayah'=> 'Kalimantan Barat')
		);
 
		//insert
		DB::table('wilayah')->insert($wilayah);
    }
}
