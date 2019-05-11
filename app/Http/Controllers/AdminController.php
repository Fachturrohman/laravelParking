<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
	public function index()
    {
    	$parkir = DB::table('tb_parkir')->get();
    	return view('adminhome',['parkir' => $parkir]);    
    }

    public function tambah()
    {
 
    // memanggil view tambah
    return view('aksitambah');
 
    }

    public function store(Request $request)
    {

        $this->validate($request,[
           'nama' => 'required|max:25',
           'plat' => 'required|unique:tb_parkir|max:15'
        ]);

    // insert data ke table pegawai
    DB::table('tb_parkir')->insert([
        'plat' => $request->plat,
        'nama' => $request->nama,
        'tanggal' => $request->tanggal,
        'harga' => $request->harga
    ]);

     


    // alihkan halaman ke halaman pegawai
    return redirect('/admin');
 
    }

	public function edit($id)
	{
	// mengambil data pegawai berdasarkan id yang dipilih
	$parkir = DB::table('tb_parkir')->where('id_parkir',$id)->get();
	// passing data pegawai yang didapat ke view edit.blade.php
	return view('edit',['parkir' => $parkir]);
 
	}

	public function update(Request $request)
	{
		$this->validate($request,[
           'nama' => 'required|max:25',
        ]);

	// update data pegawai
	DB::table('tb_parkir')->where('id_parkir',$request->id)->update([
		'plat' => $request->plat,
		'nama' => $request->nama,
		'tanggal' => $request->tanggal,
		'harga' => $request->harga
	]);
	// alihkan halaman ke halaman pegawai
	return redirect('/admin');
	}

	public function hapus($id)
	{
	// menghapus data pegawai berdasarkan id yang dipilih
	DB::table('tb_parkir')->where('id_parkir',$id)->delete();
		
	// alihkan halaman ke halaman pegawai
	return redirect('/admin');
	}

	public function cari(Request $request)
    {
        // menangkap data pencarian
        $cari = $request->cari;
 
            // mengambil data dari table pegawai sesuai pencarian data
        $parkir = DB::table('tb_parkir')
        ->where('plat','like',"%".$cari."%")
        ->paginate();
 
            // mengirim data pegawai ke view index
        return view('adminhome',['parkir' => $parkir]);
 
    }

	
    
}
