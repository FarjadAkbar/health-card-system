<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    protected $guarded = [];
     public function Hospital()
    {
        return $this->hasMany(Hospital::class, 'provider_type');
    }

}
