<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MailTemplate extends Model
{
    //
    protected $table = 'email_templates';
    protected $fillable = ['mail_title', 'mail_body', 'mail_subject', 'mail_description', 'status'];
}
