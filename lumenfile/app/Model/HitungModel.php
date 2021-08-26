<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class HitungModel extends Model
{
    public function getKurang($awal, $akhir, $hasil)
    {
        if($awal < $akhir) {
            return "error";
        } else {
            return "benar";
        }
    }
}

?>