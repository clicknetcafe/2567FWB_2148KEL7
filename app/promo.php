<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class promo extends Model
{
    protected $table = 'promo';

    protected $guarded = ['id','admin_id','produk_id'];

    public function admin()
    {
        return $this->belongsTo(admin::class);
    }

    public function produk()
    {
        return $this->belongsTo(produk::class);
    }

    public function listpromo()
    {
        $out = [];
        foreach ($this->all() as $promo)
        {
            $out[$promo->id] = "{$promo->nama_promo->isi}";
        }
        return $out;
    }
}
 