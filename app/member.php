<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Database\Eloquent\Model;

class member extends Model implements AuthenticatableContract
{
    //
    use Authenticatable;
    //
    protected $table = 'member';
    //protected $fillable = ['username','password'];
    protected $guarded = ['id'];

    protected $fillable= ['username','password','nama','jekel','alamat','telepon'];
}
