<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\admin;

use App\promo;

use App\produk;

class promomembercontroller extends Controller
{
    //
    public function awal()
    {
    	return view('promomember.awal',['data'=>promo::all()]);
    }

    public function hapus($id)
   {
    $promomember = promomember::find($id);
    $informasi = $promomember->delete() ? 'berhasil hapus data' : 'gagal hapus data';
    return redirect('promomember')->with(['informasi'=>$informasi]);
   }

   public function tambah()
    {
        $produk = new produk;
        return view('promomember.tambah',compact('admin','produk'));
    }

   public function simpan(Request $input)
    {
        $promomember = new promo;
        $promomember->admin_id = $input->admin_id;
        $promomember->produk_id = $input->produk_id;
        $promomember->nama_promomember = $input->nama_promomember;
        $promomember->isi = $input->isi;
        $informasi = $promomember->save() ? 'Berhasil simpan data' : 'gagal simpan data';
        return redirect('promomember')->with(['informasi'=>$informasi]);
    }

    public function edit($id)
    {
        $promomember = promomember::find($id);
        $produk = new produk;
        $admin = new admin;
        return view('promomember.edit',compact('produk','admin','promomember'));
    }

    public function update($id, Request $input)
    {
        $promomember = promomember::find($id);
        $promomember->admin_id = $input->admin_id;
        $promomember->produk_id = $input->produk_id;
        $promomember->nama_promomember = $input->nama_promomember;
        $promomember->isi = $input->isi;
        $promomember->save();
        $informasi = $promomember->save() ? 'Berhasil update data' : 'gagal update data';
        return redirect('promomember')->with(['informasi'=>$informasi]);
    }
}
