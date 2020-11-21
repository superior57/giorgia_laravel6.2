<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contactmethod extends Model
{
    protected $fillable = ['address', 'phone','email','twitter','facebook','instagram'];
}
