<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DentisticaDetail extends Model
{
    protected $guarded = ['id'];

    public function patient()
    {
        return $this->belongsTo('App\Patient');
    }
}
