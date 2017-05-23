<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\member;

class membercontroller extends Controller
{
    public function awal()
    {
    	return view('member.awal',['data'=>member::paginate(10)]);
    }
    public function tambah()
    {
    	return view('member.tambah');
    }
    public function simpan(Request $input)
    {
        $this->validate($input,[
            'username'=>'required',
            'password'=>'required',
            'nama'=>'required',
            'jekel'=>'required',
            'alamat'=>'required',
            'telepon'=>'required|integer',
        ]);

    	$member = new member;
    	$member->username = $input->username;
    	$member->password = $input->password;
    	$member->nama = $input->nama;
    	$member->jekel = $input->jekel;
    	$member->alamat = $input->alamat;
    	$member->telepon = $input->telepon;
    	$informasi = $member->save() ? 'berhasil simpan data' : 'gagal simpan data';
        return redirect('loginadmin')->withErrors(['informasi'=>$informasi]);
    }
    public function lihat($id)
    {
        $member = member::find($id);
        return view('member.lihat')->with(array('member'=>$member));
    }

    public function hapus($id)
   {
    $member = member::find($id);
    $informasi = $member->delete() ? 'berhasil hapus data' : 'gagal hapus data';
    return redirect('member')->with(['informasi'=>$informasi]);
   }
}