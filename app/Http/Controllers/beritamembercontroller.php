<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\admin;

use App\berita;

class beritamembercontroller extends Controller
{
    //
   public function awal()
    {
    	$semuaberita = berita::all();
        return view('beritamember.awal',['data'=>berita::all()]);

    }

    public function lihat($id)
    {
        $berita = berita::find($id);
        return view('berita.lihat')->with(array('berita'=>$berita));
    }

    public function hapus($id)
   {
    $berita = berita::find($id);
    $informasi = $berita->delete() ? 'berhasil hapus data' : 'gagal hapus data';
    return redirect('berita')->with(['informasi'=>$informasi]);
   }

   public function tambah()
    {
    	$admin = new admin;
    	return view('berita.tambah',compact('admin'));
    }

    public function simpan(Request $input)
    {
    	$berita = new berita;
        $berita->admin_id = $input->admin_id;
    	$berita->judul = $input->judul;
        $berita->deskripsi = $input->deskripsi;
        $informasi = $berita->save() ? 'Berhasil simpan data' : 'gagal simpan data';
        return redirect('berita')->with(['informasi'=>$informasi]);
    }

    public function edit($id)
    {
        $berita = berita::find($id);
        $admin = new admin;
        return view('berita.edit',compact('berita','admin'));
    }

    public function update($id, Request $input)
    {
        $berita = berita::find($id);
        $berita->admin_id= $input->admin_id;
        $berita->judul = $input->judul;
        $berita->deskripsi = $input->deskripsi;
        $berita->save();
        $informasi = $berita->save() ? 'Berhasil update data' : 'gagal update data';
        return redirect('berita')->with(['informasi'=>$informasi]);
    }
}
