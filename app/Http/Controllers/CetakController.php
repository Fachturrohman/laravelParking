<?php

namespace App\Http\Controllers;
use App\parkir;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDF;

class CetakController extends Controller
{
    function pdf($id)
    {
    	$kendaraan = DB::table('kendaraan')->get();

    	$parkir = parkir::all()->where('id_parkir',$id);
    	$pdf = PDF::loadView('pdf', ['parkir' => $parkir], ['kendaraan' => $kendaraan])->setPaper('a4', 'landscape');
		return $pdf->download('invoice.pdf');
    }
}
