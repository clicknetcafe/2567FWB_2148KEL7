<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\cabang;

use App\kota;

class cabangcontroller extends Controller
{
    //
    public function awal()
    {
    	return view('cabang.awal',['data'=>cabang::paginate(10)]);
    }

    public function hapus($id)
   {
    $cabang = cabang::find($id);
    $informasi = $cabang->delete() ? 'berhasil hapus data' : 'gagal hapus data';
    return redirect('cabang')->with(['informasi'=>$informasi]);
   }

   public function tambah()
    {
        $kota = new kota;
        return view('cabang.tambah',compact('kota'));
    }

   public function simpan(Request $input)
    {
        $cabang = new cabang;
        $cabang->nama_cabang = $input->nama_cabang;
        $cabang->alamat_cabang = $input->alamat_cabang;
        $cabang->kota_id = $input->kota_id;
        $informasi = $cabang->save() ? 'Berhasil simpan data' : 'gagal simpan data';
        return redirect('cabang')->with(['informasi'=>$informasi]);
    }

    public function edit($id)
    {
        $cabang = cabang::find($id);
        $kota = new kota;
        return view('cabang.edit',compact('kota','cabang'));
    }

    public function update($id, Request $input)
    {
        $cabang = cabang::find($id);
        $cabang->nama_cabang = $input->nama_cabang;
        $cabang->kota_id = $input->kota_id;
        $cabang->save();
        $informasi = $cabang->save() ? 'Berhasil update data' : 'gagal update data';
        return redirect('cabang')->with(['informasi'=>$informasi]);
    }
}
