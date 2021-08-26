<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;;

class HitungController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function jumlah(Request $req) {
        $hasil = $req->awal + $req->akhir;
        return response()->json([
            "awal" => $req->awal,
            "akhir" => $req->akhir,
            "hasil" => $hasil 
        ]) ;
    }

    //
}
