<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(seeder_tabel_admin::class);
        $this->call(seeder_tabel_berita::class);
        $this->call(seeder_tabel_wilayah::class);
        $this->call(seeder_tabel_kota::class);
        $this->call(seeder_tabel_cabang::class);
        $this->call(seeder_tabel_member::class);
        $this->call(seeder_tabel_kategori::class);
        $this->call(seeder_tabel_produk::class);
    }
}
