<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Projectcoba extends Model
{
    protected $guarded = [];

    public function siswa()
    {
        return $this->belongsTo(Siswa::class, 'siswas_id', 'id');
    }
}
