<?php

namespace App\Http\Controllers;
use App\parkir;
use Illuminate\Http\Request;
use PDF;

class CetakController extends Controller
{
    function pdf($id)
    {
    	$parkir = parkir::all()->where('id_parkir',$id);
    	$pdf = PDF::loadView('pdf', ['parkir' => $parkir])->setPaper('a4', 'landscape');
		return $pdf->download('invoice.pdf');
    }
}
