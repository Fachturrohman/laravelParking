<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
	public function index()
    {
    	$parkir = DB::table('tb_parkir')->join('kendaraan', 'tb_parkir.id_kendaraan', '=', 'kendaraan.id_kendaraan')->get();
    	return view('adminhome',['parkir' => $parkir]);    
    }

    public function tambah()
    {
        $kendaraan = DB::table('kendaraan')->get();

        // memanggil view aksitambah
        return view('aksitambah', ['kendaraan' => $kendaraan]);
 
    }

    public function store(Request $request)
    {

        $this->validate($request,[
           'nama' => 'required|max:25',
           'plat' => 'required|unique:tb_parkir|max:15',
           'merk' => 'required'
        ]);

        // insert data ke table tb_parkir
        DB::table('tb_parkir')->insert([
            'id_kendaraan' => $request->id_kendaraan,
            'plat' => $request->plat,
            'merk' => $request->merk,
            'nama' => $request->nama,
            'tanggal' => $request->tanggal,
            'harga' => $request->harga
    ]);

        // alihkan halaman ke halaman admin
        return redirect('/admin');
 
    }

	public function edit($id)
	{
        $kendaraan = DB::table('kendaraan')->get();
	   // mengambil data parkir berdasarkan id yang dipilih
	   $parkir = DB::table('tb_parkir')->where('id_parkir',$id)->get();
	   // passing data parkir yang didapat ke view edit.blade.php
	   return view('edit',['parkir' => $parkir], ['kendaraan' => $kendaraan]);
 
	}

	public function update(Request $request)
	{
		$this->validate($request,[
           'nama' => 'required|max:25',
        ]);

	   // update data parkir
	   DB::table('tb_parkir')->where('id_parkir',$request->id)->update([
		'id_kendaraan' => $request->id_kendaraan,
        'plat' => $request->plat,
        'merk' => $request->merk,
		'nama' => $request->nama,
		'tanggal' => $request->tanggal,
		'harga' => $request->harga
	]);

	   // alihkan halaman ke halaman admin
	   return redirect('/admin');
	}

	public function hapus($id)
	{
	   // menghapus data parkir berdasarkan id yang dipilih
	   DB::table('tb_parkir')->where('id_parkir',$id)->delete();
		
	   // alihkan halaman ke halaman admin
	   return redirect('/admin');
	}

	public function cari(Request $request)
    {
        // menangkap data pencarian
        $cari = $request->cari;
 
        // mengambil data dari table parkir sesuai pencarian data
        $parkir = DB::table('tb_parkir')->join('kendaraan', 'tb_parkir.id_kendaraan', '=', 'kendaraan.id_kendaraan')
        ->where('plat','like',"%".$cari."%")
        ->paginate();
 
        // mengirim data parkir ke view adminhome
        return view('adminhome',['parkir' => $parkir]);
 
    }
}
