<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cabang extends Model
{
    protected $table = 'cabang';

    protected $guarded = ['id','kota_id'];

    public function kota()
    {
    	return $this->belongsTo(kota::class);
    }

     public function listcabang()
    {
        $out = [];
        foreach ($this->all() as $cabang)
        {
            $out[$cabang->id] = "{$cabang->nama_cabang}";
        }
        return $out;
    }
}
