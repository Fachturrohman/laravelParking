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

        // memanggil view tambahkendaraan
        return view('tambahkendaraan', ['kendaraan' => $kendaraan]);
 
    }

    public function storekendaraan(Request $request)
    {

        $this->validate($request,[
           'jenis' => 'required|unique:kendaraan'
        ]);

        // insert data ke table kendaraan
        DB::table('kendaraan')->insert([
            'jenis' => $request->jenis
        ]);

        // alihkan halaman ke halaman admin
        return redirect('/admin/tambahkendaraan');
 
    }

    public function hapus($id)
	{
        
	   // menghapus data kendaraan berdasarkan id yang dipilih
        $tb = DB::table('kendaraan')->join('tb_parkir', 'kendaraan.id_kendaraan', '=', 'tb_parkir.id_kendaraan')
        ->where('jenis',$id)
        ->count();
        

        if ($tb > 0) {
            
            echo "<script>alert('Data Tidak Bisa Dihapus')</script>";
            echo "<script>location = '/admin/tambahkendaraan'</script>";
        }else{

            DB::table('kendaraan')->where('jenis',$id)->delete();

       // alihkan halaman ke halaman admin
         return redirect('/admin/tambahkendaraan');
        }


		
	   }
}
