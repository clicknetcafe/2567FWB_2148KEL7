<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kategori extends Model
{
    //
     protected $table = 'kategori';

    protected $guarded = ['id'];

    public function produk()
    {
    	return $this->hasMany(produk::class);
    }

    public function listkategori()
    {
        $out = [];
        foreach ($this->all() as $kategori)
        {
            $out[$kategori->id] = "{$kategori->nama_kategori}";
        }
        return $out;
    }
}
