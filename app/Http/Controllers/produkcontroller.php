<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\produk;

use App\kategori;

use App\cabang;

class produkcontroller extends Controller
{
    //
    public function awal()
    {
        return view('produk.awal',['data'=>produk::paginate(10)]);

    }

    public function tambah()
    {
    	$kategori = new kategori;
        $cabang = new cabang;
    	return view('produk.tambah',compact('kategori','cabang'));
    }

    public function simpan(Request $input)
    {
    	$produk = new produk;
    	$produk->nama_produk = $input->nama_produk;
    	$produk->harga = $input->harga;
    	$produk->kategori_id = $input->kategori_id;
    	$produk->cabang_id = $input->cabang_id;
        $informasi = $produk->save() ? 'Berhasil simpan data' : 'gagal simpan data';
        return redirect('produk')->with(['informasi'=>$informasi]);
    }

    public function edit($id)
    {
        $produk = produk::find($id);
        $kategori = new kategori;
        $cabang = new cabang;
        return view('produk.edit',compact('produk','kategori','cabang'));
    }

    public function lihat($id)
    {
        $produk = produk::find($id);
        return view('produk.lihat')->with(array('produk'=>$produk));
    }

    public function update($id, Request $input)
    {
        $produk = produk::find($id);
        $produk->nama_produk = $input->nama_produk;
        $produk->harga = $input->harga;
        $produk->kategori_id= $input->kategori_id;
        $produk->cabang_id= $input->cabang_id;
        $produk->save();
        $informasi = $produk->save() ? 'Berhasil update data' : 'gagal update data';
        return redirect('produk')->with(['informasi'=>$informasi]);
    }

    public function hapus($id)
    {
        $produk = produk::find($id);
        $informasi = $produk->delete() ? 'berhasil hapus data' : 'gagal hapus data';
        return redirect('produk')->with(['informasi'=>$informasi]);
    }
}
