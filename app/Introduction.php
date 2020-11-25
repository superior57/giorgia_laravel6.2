<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Introduction extends Model
{
    protected $fillable = ['title', 'subtitle', 'text', 'food', 'toy', 'location', 'crew'];

    public static function saveIntroduction($introduction,$id) {
        DB::table('introductions')
            ->where('id', $id)
            ->update(['text' => $introduction]);

        return 'success';
    }
}
