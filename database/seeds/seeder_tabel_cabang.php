<?php

use Illuminate\Database\Seeder;

class seeder_tabel_cabang extends Seeder
{
    /** 
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //mengosongkan tabel
        DB::table('cabang')->delete();

        //buat data
		$cabang = array(
			array('id'=>1,'kota_id'=>1,'nama_cabang'=> 'V-MART','alamat_cabang'=> 'Jl. THM Blok C No. 04'),
            array('id'=>2,'kota_id'=>1,'nama_cabang'=> 'OZ MART','alamat_cabang'=> 'Jl. Lingkas Ujung No. 09 B'),
            array('id'=>3,'kota_id'=>1,'nama_cabang'=> 'EFENDI MART','alamat_cabang'=> 'Jl. Ki Hajar Dewantara 2'),
            array('id'=>4,'kota_id'=>2,'nama_cabang'=> 'SYAHID MART','alamat_cabang'=> 'Jl. Dr Sutomo No. 07'),
            array('id'=>5,'kota_id'=>2,'nama_cabang'=> 'MM ACING JAYA','alamat_cabang'=> 'Jl. Manggar Indah No. 12'),
            array('id'=>6,'kota_id'=>2,'nama_cabang'=> 'SURYA MART','alamat_cabang'=> 'Jl. Mayjen Sutoyo Gunung Sari No. 7'),
            array('id'=>7,'kota_id'=>3,'nama_cabang'=> 'TJ MART','alamat_cabang'=> 'Jl. Projakal KM 5,5 No. 60'),
            array('id'=>8,'kota_id'=>3,'nama_cabang'=> 'ASOKA','alamat_cabang'=> 'Pondok Karya Agung BA 17'),
            array('id'=>9,'kota_id'=>3,'nama_cabang'=> 'SOLIHIN GP','alamat_cabang'=> 'Ruhui Rahayu Ring Road 11'),
            array('id'=>10,'kota_id'=>4,'nama_cabang'=> 'OK MART','alamat_cabang'=> 'Sepinggan Square SQ.1/66'),
            array('id'=>11,'kota_id'=>4,'nama_cabang'=> 'HE MART','alamat_cabang'=> 'Jl. Impres Klandasan No. 144'),
            array('id'=>12,'kota_id'=>4,'nama_cabang'=> '99 RANCH MARKET','alamat_cabang'=> 'Jl. Piere Tendean 3'),
            array('id'=>13,'kota_id'=>5,'nama_cabang'=> 'SWALA 128','alamat_cabang'=> 'Jl. Sultan Hasanudin No. 03'),
            array('id'=>14,'kota_id'=>5,'nama_cabang'=> 'CEMPAKA MARKET','alamat_cabang'=> 'Jl. Rifadin Ringroad Simpang Tiga No. 01'),
            array('id'=>15,'kota_id'=>5,'nama_cabang'=> 'MERAH PUTIH','alamat_cabang'=> 'Jl. Imam Bonjol No. 15'),
            array('id'=>16,'kota_id'=>6,'nama_cabang'=> 'ALFARIA','alamat_cabang'=> 'Jl. Letjen Suprapto No. 02'),
            array('id'=>17,'kota_id'=>6,'nama_cabang'=> 'HASANA HUDA','alamat_cabang'=> 'Jl. Blora Klandasan Ilir No. 01'),
            array('id'=>18,'kota_id'=>6,'nama_cabang'=> 'ALFA II','alamat_cabang'=> 'Jl. Pandean Wangi 129'),
            array('id'=>19,'kota_id'=>7,'nama_cabang'=> 'MARKET ABC','alamat_cabang'=> 'Rapak Plaza R Blok 4'),
            array('id'=>20,'kota_id'=>7,'nama_cabang'=> 'KARTIKA','alamat_cabang'=> 'Jl. Letjen Suprapto No. 02'),
            array('id'=>21,'kota_id'=>7,'nama_cabang'=> 'COSMO MINI MART','alamat_cabang'=> 'Simpang Pait No. 07'),
            array('id'=>22,'kota_id'=>8,'nama_cabang'=> 'SRI WIDHI','alamat_cabang'=> 'Jl. Panglima Batur No. 68'),
            array('id'=>23,'kota_id'=>8,'nama_cabang'=> 'LAI LAI','alamat_cabang'=> 'Jl. Merbabu No. 32'),
            array('id'=>24,'kota_id'=>8,'nama_cabang'=> 'ACIMART','alamat_cabang'=> 'Jl. Cendana 11 (Depan Puskesmas)'),
            array('id'=>25,'kota_id'=>9,'nama_cabang'=> 'MARKET HOKI','alamat_cabang'=> 'Jl. Yos Sudarso No. 34'),
            array('id'=>26,'kota_id'=>9,'nama_cabang'=> 'JABUMART','alamat_cabang'=> 'Jl. Cokroaminoto No. 10'),
            array('id'=>27,'kota_id'=>9,'nama_cabang'=> 'KOPIN MAXI','alamat_cabang'=> 'Jl. Gajah Mada No. 72'),
            array('id'=>28,'kota_id'=>10,'nama_cabang'=> 'TOKO 13','alamat_cabang'=> 'Jl . Soeprapto 3'),
            array('id'=>29,'kota_id'=>10,'nama_cabang'=> 'DAINES','alamat_cabang'=> 'Jl. Manunggal Jati No. 04'),
            array('id'=>30,'kota_id'=>10,'nama_cabang'=> 'INDOPURA','alamat_cabang'=> 'Jl. Urip Sumoharjo No. 37'),
            array('id'=>31,'kota_id'=>11,'nama_cabang'=> 'EDIS','alamat_cabang'=> 'Jl. Sentosa No. 13'),
            array('id'=>32,'kota_id'=>11,'nama_cabang'=> 'ANDRY','alamat_cabang'=> 'Jl. Modang No. 05'),
            array('id'=>33,'kota_id'=>11,'nama_cabang'=> 'MINI DINY','alamat_cabang'=> 'Sedaken Blok H No. 20'),
            array('id'=>34,'kota_id'=>12,'nama_cabang'=> 'EVA MARKET','alamat_cabang'=> 'Jl. Hasan Basri No. 44'),
            array('id'=>35,'kota_id'=>12,'nama_cabang'=> 'QUICKMART','alamat_cabang'=> 'Jl. Panglima M. Noor 99'),
            array('id'=>36,'kota_id'=>12,'nama_cabang'=> 'DAILYMART','alamat_cabang'=> 'Jl. KH. Abdul Hasan No. 67'),
            array('id'=>37,'kota_id'=>13,'nama_cabang'=> 'FRESH 1','alamat_cabang'=> 'Jl. Mulawarman No. 93'),
            array('id'=>38,'kota_id'=>13,'nama_cabang'=> 'GREEN COURT','alamat_cabang'=> 'Jl. P. Hidayatullah No. 32'),
            array('id'=>39,'kota_id'=>13,'nama_cabang'=> 'JALA ARTA','alamat_cabang'=> 'Jl. Mulawarman No. 93')
		);

		//insert
		DB::table('cabang')->insert($cabang);
    }
}
