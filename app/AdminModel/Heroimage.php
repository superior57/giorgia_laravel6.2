<?php

namespace App\AdminModel;

use Illuminate\Database\Eloquent\Model;

class Heroimage extends Model
{
<<<<<<< HEAD
    public function updateHeroImage($filename,$id) {
        $image = self::find($id);
        $image->image = $filename;
        $image->save();
        return 'success';
    }
=======
    // public function updateHeroImage($filename,$id) {
    //     $image = self::find($id);
    //     $image->image = $filename;
    //     $image->save();
    //     return 'success';
    // }
>>>>>>> 515b954601db0dafee15840ce3697fdaaab254ad
}
