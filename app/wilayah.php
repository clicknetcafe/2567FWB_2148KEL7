<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class wilayah extends Model
{
    //
    protected $table = 'wilayah';
    //protected $fillable = ['username','password'];
    protected $guarded = ['id'];

    public function kota()
    {
    	return $this->hasMany(kota::class);
    }

    public function listwilayah()
    {
        $out = [];
        foreach ($this->all() as $wilayah)
        {
            $out[$wilayah->id] = "{$wilayah->nama_wilayah}";
        }
        return $out;
    }
}
  