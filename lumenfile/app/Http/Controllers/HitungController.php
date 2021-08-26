<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Model\HitungModel;

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

    public function kurang(Request $req) {

        $t = new HitungModel();

        $hasil = $req->awal - $req->akhir;

        $status = $t->getKurang($req->awal, $req->akhir, $hasil);

        return response()->json([
            "awal" => $req->awal,
            "akhir" => $req->akhir,
            "hasil" => $hasil ,
            "status" => $status
        ]) ;
    }

    //
}
