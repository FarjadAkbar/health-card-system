<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
// use App\Observers\CardObserver;

class Card extends Model
{
    protected $table = 'cards';
    protected $primaryKey = 'id';

    public $timestamps = true;
    protected $guarded = ['id'];
    // protected $fillable = ['name', 'cpr_no', 'email', 'date', 'expiry', 'last_expiry', 'online', 'first_issue_date', 'agent_id', 'gender', 'mobile', 'phone', 'house', 'road', 'block', 'place', 'country', 'card_type_id', 'payment_method', 'contact_method', 'package_type', 'period', 'status', 'img', 'price', 'father_id', 'delivery', 'total', 'balance', 'comment'];
    // protected $dispatchesEvents = [
    //     'updated' => CardObserver::class,
    // ];

    public function User()
    {
      return  $this->belongsTo(User::class, 'agent_id');
    }

    public function Package()
    {
        return $this->belongsTo(Package_type::class, 'package_type');
    }

    public function Type()
    {
        return $this->belongsTo(Card_type::class, 'card_type_id');
    }
}
