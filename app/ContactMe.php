<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactMe extends Model
{
    //
    public $table = 'contact_me';
    public $fillable = ['name', 'email', 'phone', 'message'];
}
