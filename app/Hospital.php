<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hospital extends Model
{
    protected $table = 'hospitals';
    protected $guarded = [];

    public function Service()
    {
        return $this->hasMany(Service::class, 'hospital_id');
    }

    public function Attachment()
    {
        return $this->hasOne(Attachment::class, 'hospital_id');
    }

    public function Contract()
    {
        return $this->hasMany(Contract::class, 'hospital_id');
    }

    public function File()
    {
        return $this->hasMany(File_doctor::class, 'id_hospital');
    }

    public function Category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
    
      public function Provider()
    {
        return $this->belongsTo(Provider::class, 'provider_type');
    }

    public function Card()
    {
        return $this->belongsTo(Card_type::class, 'card_type');
    }
}
