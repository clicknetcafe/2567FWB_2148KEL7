<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\wilayah;

use App\kota;

class kotacontroller extends Controller
{
    //
   public function awal()
    {
    	$semuakota = kota::all();
        return view('kota.awal',['data'=>kota::paginate(10)]);

    }

    public function lihat($id)
    {
        $kota = kota::find($id);
        return view('kota.lihat')->with(array('kota'=>$kota));
    }

    public function hapus($id)
   {
    $kota = kota::find($id);
    $informasi = $kota->delete() ? 'berhasil hapus data' : 'gagal hapus data';
    return redirect('kota')->with(['informasi'=>$informasi]);
   }

   public function tambah()
    {
    	$wilayah = new wilayah;
    	return view('kota.tambah',compact('wilayah'));
    }

    public function simpan(Request $input)
    {
    	$kota = new kota;
    	$kota->nama_kota = $input->nama_kota;
    	$kota->wilayah_id = $input->wilayah_id;
        $informasi = $kota->save() ? 'Berhasil simpan data' : 'gagal simpan data';
        return redirect('kota')->with(['informasi'=>$informasi]);
    }

    public function edit($id)
    {
        $kota = kota::find($id);
        $wilayah = new wilayah;
        return view('kota.edit',compact('kota','wilayah'));
    }

    public function update($id, Request $input)
    {
        $kota = kota::find($id);
        $kota->nama_kota = $input->nama_kota;
        $kota->wilayah_id= $input->wilayah_id;
        $kota->save();
        $informasi = $kota->save() ? 'Berhasil update data' : 'gagal update data';
        return redirect('kota')->with(['informasi'=>$informasi]);
    }
}
