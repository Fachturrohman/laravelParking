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

    	$parkir = DB::table('tb_parkir')->join('kendaraan', 'tb_parkir.id_kendaraan', '=', 'kendaraan.id_kendaraan')->where('id_parkir',$id)->get();
    	$pdf = PDF::loadView('pdf', ['parkir' => $parkir])->setPaper('a4', 'landscape');
		return $pdf->download('invoice.pdf');
    }
}
