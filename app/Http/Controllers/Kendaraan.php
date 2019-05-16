<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Kendaraan extends Controller
{
    public function index()
    {
    	$kendaraan = DB::table('kendaraan')->get();
    	return view('tambahkendaraan',['kendaraan' => $kendaraan]);    
    }

    public function tambahkendaraan()
    {
             $kendaraan = DB::table('kendaraan')->get();

    // memanggil view tambah
    return view('tambahkendaraan', ['kendaraan' => $kendaraan]);
 
    }

    public function storekendaraan(Request $request)
    {

        $this->validate($request,[
           'jenis' => 'required|max:25'
        ]);

    // insert data ke table pegawai
    DB::table('kendaraan')->insert([
        'jenis' => $request->jenis
    ]);

    // alihkan halaman ke halaman pegawai
    return redirect('/admin/tambahkendaraan');
 
    }

    public function hapus($id)
	{
	// menghapus data pegawai berdasarkan id yang dipilih
	DB::table('kendaraan')->where('id_kendaraan',$id)->delete();
		
	// alihkan halaman ke halaman pegawai
	return redirect('/admin/tambahkendaraan');
	}
}
