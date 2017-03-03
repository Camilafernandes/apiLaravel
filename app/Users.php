<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    protected $fillable = ['name', 'email', 'phone', 'cel', 'gender', 'dob'];

    protected $dates = ['deleted_at'];
}
