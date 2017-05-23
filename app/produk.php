<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class produk extends Model
{
    //
    protected $table = 'produk';

    protected $guarded = ['id','kategori_id'];

    public function kategori()
    {
    	return $this->belongsTo(kategori::class);
    }

    public function promo()
    {
    	return $this->hasOne(promo::class);
    }

    public function listproduk()
    {
        $out = [];
        foreach ($this->all() as $produk)
        {
            $out[$produk->id] = "{$produk->nama_produk}";
        }
        return $out;
    }
}
