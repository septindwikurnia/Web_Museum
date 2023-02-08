<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pj_museum extends Model
{
    protected $table = 'pj_museum';
    protected $fillable = [
            'id',
            'nama_pj',
            'gender',
            'jabatan',
            'image_pj'
    ];
}
?>