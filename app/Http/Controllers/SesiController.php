<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\admin;
use Illuminate\Auth\SessionGuard;
use Auth;
class SesiController extends Controller
{
    public function index()
	{
		return view('master');
	}

	public function form()
	{
		if(Auth::check()){
			return redirect('/');
		}else
		return view('loginadmin')->withErrors(['Silahkan Login Terlebih Dahulu']);
	}

	public function validasi(Request $input)
	{
		$this->validate($input,[
			'username'=>'required',
			'password'=>'required',
		]);
		$admin = admin::where($input->only('username','password'))->first();
		if(! is_null($admin))
		{
			Auth::login($admin);
			
			if(Auth::check())
				return redirect('/')->with('informasi',"Selamat datang ".Auth::user()->username);
		}
		return redirect('/loginadmin')->withErrors(['Pengguna tidak ditemukan']);
	}
	public function logout(){
		if(Auth::check()){
			Auth::logout();
			return redirect('/loginadmin')->withErrors(['Silahkan login untuk masuk ke sistem']);
		}else{
			return redirect('/loginadmin')->withErrors(['Silahkan login terlebih dahulu']);
		}
		
	}
}