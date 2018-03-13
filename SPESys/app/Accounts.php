<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Accounts extends Model
{
    protected $fillable = ['userid','usertype','title','firstname', 'lastname', 'email','password'];
}
