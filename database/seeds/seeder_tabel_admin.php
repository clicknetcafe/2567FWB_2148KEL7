<?php

use Illuminate\Database\Seeder;

class seeder_tabel_admin extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	//mengosongkan tabel
        DB::table('admin')->delete();

        //buat data
		$admin = array(
			array('id'=>1,'nama'=> 'Admin Ganteng','username'=> 'superuser', 'password'=> 'superuser'),
			array('id'=>2,'nama'=> 'Syahrul Andi','username'=> 'andi', 'password'=> '060'),
			array('id'=>3,'nama'=> 'Doni Ramadhan','username'=> 'doni', 'password'=> '066'),
			array('id'=>4,'nama'=> 'Rojalil','username'=> 'jalil', 'password'=> '065'),
			array('id'=>5,'nama'=> 'Yovan Saputra','username'=> 'yovan', 'password'=> '063')		
		);

		//insert
		DB::table('admin')->insert($admin);    
    }
}
