<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\member;
use Illuminate\Auth\SessionGuard;
use Auth;
class sesicontrollermember extends Controller
{
    public function index()
	{
		return view('halaman/master');
	}

	public function form()
	{
		if(Auth::check()){
			return redirect('/halamanmember');
		}
		else

		return view('loginadmin')->withErrors(['silahkan login terlebih dahulu']);
	}

	public function validasi(Request $input)
	{
		$this->validate($input,[
			'username'=>'required',
			'password'=>'required',
		]);

		$member = member::where($input->only('username','password'))->first();

		if(! is_null($member))
		{
			// Auth::login($member);
			
			// if(Auth::check())
				return redirect('/halamanmember');
		}
		return redirect('/loginmember')->withErrors(['Pengguna tidak ditemukan']);
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
