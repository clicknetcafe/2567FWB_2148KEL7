<?php

use Illuminate\Database\Seeder;

class seeder_tabel_kota extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    { 
        DB::table('kota')->delete();

        //buat data
		$kota = array(
			array('id'=>1,'wilayah_id'=>1,'nama_kota'=> 'Kota Tarakan'),
			array('id'=>2,'wilayah_id'=>1,'nama_kota'=> 'Kabupaten Bulungan'),
			array('id'=>3,'wilayah_id'=>1,'nama_kota'=> 'Kabupaten Malinau'),
			array('id'=>4,'wilayah_id'=>2,'nama_kota'=> 'Kota Bontang'),
			array('id'=>5,'wilayah_id'=>2,'nama_kota'=> 'Kota Samarinda'),
			array('id'=>6,'wilayah_id'=>2,'nama_kota'=> 'Kota Balikpapan'),
			array('id'=>7,'wilayah_id'=>2,'nama_kota'=> 'Kabupaten Berau'),
			array('id'=>8,'wilayah_id'=>3,'nama_kota'=> 'Banjarbaru'),
			array('id'=>9,'wilayah_id'=>3,'nama_kota'=> 'Banjarmasin'),
			array('id'=>10,'wilayah_id'=>3,'nama_kota'=> 'Kabupaten Balangan'),
			array('id'=>11,'wilayah_id'=>4,'nama_kota'=> 'Kota Pontianak'),
			array('id'=>12,'wilayah_id'=>4,'nama_kota'=> 'kota Singkawang'),
			array('id'=>13,'wilayah_id'=>4,'nama_kota'=> 'Kabupaten Sambas')
		);

		//insert
		DB::table('kota')->insert($kota);
    }
}
