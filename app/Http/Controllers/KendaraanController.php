<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KendaraanController extends Controller
{
    public function index()
    {
    	$kendaraan = DB::table('kendaraan')->get();
    	return view('kendaraan',['kendaraan' => $kendaraan]);    
    }

    public function tambahkendaraan()
    {
         $kendaraan = DB::table('kendaraan')->get();

        // memanggil view kendaraan
        return view('kendaraan', ['kendaraan' => $kendaraan]);
 
    }

    public function storekendaraan(Request $request)
    {

        $this->validate($request,[
           'jenis' => 'required|max:25'
        ]);

        // insert data ke table kendaraan
        DB::table('kendaraan')->insert([
            'jenis' => $request->jenis
        ]);

        // alihkan halaman ke halaman home
        return redirect('/home/tambahkendaraan');
 
    }
}
