<?php

use Illuminate\Database\Seeder;

class seeder_tabel_berita extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('berita')->delete();

        //buat data
		$berita = array(
			array('id'=>1,'admin_id'=>2, 'tanggal'=> '20170513', 'judul'=> 'Judul 1', 'deskripsi'=> 'Deskripsi 1'),
			array('id'=>2,'admin_id'=>2, 'tanggal'=> '20170514', 'judul'=> 'Judul 2', 'deskripsi'=> 'Deskripsi 2'),
			array('id'=>3,'admin_id'=>3, 'tanggal'=> '20170515', 'judul'=> 'Judul 3', 'deskripsi'=> 'Deskripsi 3'),
			array('id'=>4,'admin_id'=>5, 'tanggal'=> '20170516', 'judul'=> 'Judul 4', 'deskripsi'=> 'Deskripsi 4'),
			array('id'=>5,'admin_id'=>4, 'tanggal'=> '20170517', 'judul'=> 'Judul 5', 'deskripsi'=> 'Deskripsi 5'),
			array('id'=>6,'admin_id'=>4, 'tanggal'=> '20170518', 'judul'=> 'Judul 6', 'deskripsi'=> 'Deskripsi 6')		
		);

		//insert
		DB::table('berita')->insert($berita);
    }
}
