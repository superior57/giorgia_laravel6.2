<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Introduction extends Model
{
    protected $fillable = ['title', 'subtitle', 'text', 'food', 'toy', 'location', 'crew'];
}
