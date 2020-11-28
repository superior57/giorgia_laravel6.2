<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Introduction extends Model
{
<<<<<<< HEAD
    protected $fillable = ['title', 'subtitle', 'text', 'food', 'toy', 'location', 'crew'];
=======
    protected $fillable = ['title', 'subtitle', 'text', 'food', 'toy', 'location', 'crewtitle','bookingtitle','addimage'];
>>>>>>> 515b954601db0dafee15840ce3697fdaaab254ad

    public static function saveIntroduction($introduction,$id) {
        DB::table('introductions')
            ->where('id', $id)
            ->update(['text' => $introduction]);

        return 'success';
    }
<<<<<<< HEAD
=======

    public static function updateFoodImage($filename,$id) {

        DB::table('introductions')
            ->where('id', $id)
            ->update(['food' => $filename]);

        return 'success';
    }

    public static function updateToyImage($filename,$id) {

        DB::table('introductions')
            ->where('id', $id)
            ->update(['toy' => $filename]);

        return 'success';
    }

    public static function updateLocationImage($filename,$id) {

        DB::table('introductions')
            ->where('id', $id)
            ->update(['location' => $filename]);

        return 'success';
    }
>>>>>>> 515b954601db0dafee15840ce3697fdaaab254ad
}
