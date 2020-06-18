<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    // diisi ketika kita pakai create di controllernya

    // pakai fillable itu harus ada valuenya (untuk all)
    // pakai guarded ga pakek value

    use SoftDeletes;
    
    //protected $guarded;
    protected $fillable = ['nama', 'nim', 'email', 'jurusan'];
}
