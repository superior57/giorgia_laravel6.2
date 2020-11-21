<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Specification extends Model
{
    protected $fillable = ['length', 'beam', 'draft', 'built', 'builder', 'engines', 'flag', 'hull', 'hull_type', 'cabins', 'guests', 'crew', 'speed', 'range'];
}
