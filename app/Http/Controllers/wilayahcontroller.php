<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\wilayah;

class wilayahcontroller extends Controller
{
    public function awal()
    {
    	return view('wilayah.awal',['data'=>wilayah::all()]);
    }
    public function tambah()
    {
    	return view('wilayah.tambah');
    }
    public function simpan(Request $input)
    {
        $this->validate($input,[
            'nama_wilayah'=>'required',
        ]);

    	$wilayah = new wilayah;
    	$wilayah->nama_wilayah = $input->nama_wilayah;
    	$informasi = $wilayah->save() ? 'berhasil simpan data' : 'gagal simpan data';
        return redirect('loginadmin')->withErrors(['informasi'=>$informasi]);
    }
    public function hapus($id)
   {
    $wilayah = wilayah::find($id);
    $informasi = $wilayah->delete() ? 'berhasil hapus data' : 'gagal hapus data';
    return redirect('wilayah')->with(['informasi'=>$informasi]);
   }
}