<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Crewmember extends Model
{
    protected $fillable = ['name', 'position','image', 'text', 'backgroundcolor'];
}
