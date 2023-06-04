<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class History extends Model
{
  //
    protected $table = 'history';
    protected $fillable = [
        'reference_table',
        'reference_id',
        'user_id',
        'body',
        'issue_date',
        'new_expiry',
        'period',
    ];

    public function User(){
      return  $this->belongsTo(User::class, 'user_id');
    }
}
