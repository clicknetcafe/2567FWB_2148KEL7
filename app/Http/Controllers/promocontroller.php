<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\admin;

use App\promo;

use App\produk;

class promocontroller extends Controller
{
    //
    public function awal()
    {
    	return view('promo.awal',['data'=>promo::paginate(10)]);
    }

    public function hapus($id)
   {
    $promo = promo::find($id);
    $informasi = $promo->delete() ? 'berhasil hapus data' : 'gagal hapus data';
    return redirect('promo')->with(['informasi'=>$informasi]);
   }

   public function tambah()
    {
        $produk = new produk;
        return view('promo.tambah',compact('admin','produk'));
    }

   public function simpan(Request $input)
    {
        $promo = new promo;
        $promo->admin_id = $input->admin_id;
        $promo->produk_id = $input->produk_id;
        $promo->nama_promo = $input->nama_promo;
        $promo->isi = $input->isi;
        $informasi = $promo->save() ? 'Berhasil simpan data' : 'gagal simpan data';
        return redirect('promo')->with(['informasi'=>$informasi]);
    }

    public function edit($id)
    {
        $promo = promo::find($id);
        $produk = new produk;
        $admin = new admin;
        return view('promo.edit',compact('produk','admin','promo'));
    }

    public function update($id, Request $input)
    {
        $promo = promo::find($id);
        $promo->admin_id = $input->admin_id;
        $promo->produk_id = $input->produk_id;
        $promo->nama_promo = $input->nama_promo;
        $promo->isi = $input->isi;
        $promo->save();
        $informasi = $promo->save() ? 'Berhasil update data' : 'gagal update data';
        return redirect('promo')->with(['informasi'=>$informasi]);
    }
}
