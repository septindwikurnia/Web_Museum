<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kotaksaran extends Model
{
    protected $table = 'kotak_saran';
    protected $fillable = [
            'id_saran',
            'name',
            'email',
            'message'
    ];
}
?>