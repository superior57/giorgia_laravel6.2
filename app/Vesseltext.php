<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vesseltext extends Model
{
    protected $fillable = ['title', 'intro','interiortitle', 'interior','exteriortitle', 'exterior', 'specification'];
}
