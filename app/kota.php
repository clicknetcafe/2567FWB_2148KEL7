<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kota extends Model
{
    protected $table = 'kota';

    protected $guarded = ['id','wilayah_id'];

    public function wilayah()
    {
    	return $this->belongsTo(wilayah::class);
    }

    public function cabang()
    {
    	return $this->hasMany(cabang::class);
    }

    public function listkota()
    {
        $out = [];
        foreach ($this->all() as $kota)
        {
            $out[$kota->id] = "{$kota->nama_kota}";
        }
        return $out;
    }
}
 