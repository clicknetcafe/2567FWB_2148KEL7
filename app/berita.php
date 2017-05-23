<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class berita extends Model
{
    protected $table = 'berita';

    protected $guarded = ['id','admin_id'];

    public function admin()
    {
        return $this->belongsTo(admin::class);
    }

    public function listberita()
    {
        $out = [];
        foreach ($this->all() as $berita)
        {
            $out[$berita->id] = "{$berita->judul->deskripsi}";
        }
        return $out;
    }
}
 