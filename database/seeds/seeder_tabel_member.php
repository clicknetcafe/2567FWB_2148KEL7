<?php

use Illuminate\Database\Seeder;

class seeder_tabel_member extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('member')->delete();

        //buat data
		$member = array(
			array('id'=>1,'username'=> 'bot1', 'password'=> 'bot1', 'nama'=> 'Anonymous', 'jekel'=> 'Laki-laki', 'alamat'=> 'Jl. Pemuda', 'telepon'=> '086543223457'),
			array('id'=>2,'username'=> 'bot2', 'password'=> 'bot2', 'nama'=> 'Kawai Co', 'jekel'=> 'Perempuan', 'alamat'=> 'Jl. Ternate 3', 'telepon'=> '081228886645'),
			array('id'=>3,'username'=> 'bot3', 'password'=> 'bot3', 'nama'=> 'Merilina', 'jekel'=> 'Perempuan', 'alamat'=> 'Jl. Pamungkas No. 06', 'telepon'=> '087756643311'),
			array('id'=>4,'username'=> 'bot4', 'password'=> 'bot4', 'nama'=> 'Aswa Rina', 'jekel'=> 'Perempuan', 'alamat'=> 'Jl. Kemayoran', 'telepon'=> '089944451117'),
			array('id'=>5,'username'=> 'bot5', 'password'=> 'bot5', 'nama'=> 'Mahidir', 'jekel'=> 'Laki-laki', 'alamat'=> 'Jl. Murni', 'telepon'=> '085443678901')
		);

		//insert
		DB::table('member')->insert($member);
    }
}
