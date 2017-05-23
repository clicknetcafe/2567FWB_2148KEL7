<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Database\Eloquent\Model;

class pengguna extends Model implements AuthenticatableContract
{
    use Authenticatable;
    //
    protected $table = 'admin';
    //protected $fillable = ['username','password'];
    protected $guarded = ['id'];

    public function berita()
    {
    	return $this->hasMany(berita::class);
    }

        public function promo()
    {
        return $this->hasMany(promo::class);
    }

    public function listadmin()
    {
        $out = [];
        foreach ($this->all() as $admin)
        {
            $out[$admin->id] = "{$admin->nama}";
        }
        return $out;
    }
}
