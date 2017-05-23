<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('/login','SesiController@form');
Route::post('/login','SesiController@validasi');
Route::get('/logout','SesiController@logout');

Route::get('/loginadmin', function () {
    return view('loginadmin');
});

Route::get('/halamanmember', function () {
    return view('halaman/master');
});

Route::get('/loginmember','SesiControllermember@form');
Route::post('/loginmember','SesiControllermember@validasi');
Route::get('/logoutmember','SesiControllermember@logout');

Route::get('/member', function () {
     return view('member.tambah');
 });
Route::post('/member/simpan','membercontroller@simpan');
Route::get('/pesanbarang','pesanbarangcontroller@awal');

Route::get('/beritamember', 'beritamembercontroller@awal');
Route::get('beritamember/hapus/{beritamember}','beritamembercontroller@hapus');
Route::get('beritamember/tambah', 'beritamembercontroller@tambah');
Route::post('beritamember/simpan','beritamembercontroller@simpan');
Route::get('beritamember/edit/{beritamember}','beritamembercontroller@edit');
Route::post('beritamember/edit/{beritamember}','beritamembercontroller@update');

Route::get('/promomember', 'promomembercontroller@awal');
Route::get('promomember/hapus/{promomember}','promomembercontroller@hapus');
Route::get('promomember/tambah', 'promomembercontroller@tambah');
Route::post('promomember/simpan','promomembercontroller@simpan');
Route::get('promomember/edit/{promomember}','promomembercontroller@edit');
Route::post('promomember/edit/{promomember}','promomembercontroller@update');

Route::group(['middleware'=>'Autentifikasiuser'],function()
{

Route::get('/member', 'membercontroller@awal');
Route::get('member/{member}','membercontroller@lihat');
Route::get('member/hapus/{member}','membercontroller@hapus');

Route::get('/wilayah', 'wilayahcontroller@awal');
Route::get('wilayah/hapus/{wilayah}','wilayahcontroller@hapus');

Route::get('/kota', 'kotacontroller@awal');
Route::get('kota/hapus/{kota}','kotacontroller@hapus');
Route::get('kota/tambah', 'kotacontroller@tambah');
Route::post('kota/simpan','kotacontroller@simpan');
Route::get('kota/edit/{kota}','kotacontroller@edit');
Route::post('kota/edit/{kota}','kotacontroller@update');

Route::get('/berita', 'beritacontroller@awal');
Route::get('berita/hapus/{berita}','beritacontroller@hapus');
Route::get('berita/tambah', 'beritacontroller@tambah');
Route::post('berita/simpan','beritacontroller@simpan');
Route::get('berita/edit/{berita}','beritacontroller@edit');
Route::post('berita/edit/{berita}','beritacontroller@update');

Route::get('/promo', 'promocontroller@awal');
Route::get('promo/hapus/{promo}','promocontroller@hapus');
Route::get('promo/tambah', 'promocontroller@tambah');
Route::post('promo/simpan','promocontroller@simpan');
Route::get('promo/edit/{promo}','promocontroller@edit');
Route::post('promo/edit/{promo}','promocontroller@update');

Route::get('/cabang', 'cabangcontroller@awal');
Route::get('cabang/hapus/{cabang}','cabangcontroller@hapus');
Route::get('cabang/tambah', 'cabangcontroller@tambah');
Route::post('cabang/simpan','cabangcontroller@simpan');
Route::get('cabang/edit/{cabang}','cabangcontroller@edit');
Route::post('cabang/edit/{cabang}','cabangcontroller@update');

Route::get('/produk', 'produkcontroller@awal');
Route::get('/produk/hapus/{produk}','produkcontroller@hapus');
Route::get('produk/tambah', 'produkcontroller@tambah');
Route::post('produk/simpan','produkcontroller@simpan');
Route::get('produk/edit/{produk}','produkcontroller@edit');
Route::post('produk/edit/{produk}','produkcontroller@update');

Route::get('/', function () {
    return view('master');

});


Route::get('/welcome', function () {
    return view('welcome');
});

});