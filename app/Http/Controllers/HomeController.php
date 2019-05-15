<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $parkir = DB::table('tb_parkir')->join('kendaraan', 'tb_parkir.id_kendaraan', '=', 'kendaraan.id_kendaraan')->get();
        return view('home',['parkir' => $parkir]);
        //return view('home');
    }

    public function tambah()
    {
        
        $kendaraan = DB::table('kendaraan')->get();
    // memanggil view tambah
    return view('tambah', ['kendaraan' => $kendaraan]);
 
    }

    public function store(Request $request)
    {

        $this->validate($request,[
           'nama' => 'required|max:25',
           'plat' => 'required|unique:tb_parkir|max:15',           
           'merk' => 'required'
        ]);

    // insert data ke table pegawai
    DB::table('tb_parkir')->insert([
        'id_kendaraan' => $request->id_kendaraan,
        'plat' => $request->plat,
        'merk' => $request->merk,
        'nama' => $request->nama,
        'tanggal' => $request->tanggal,
        'harga' => $request->harga
    ]);

     


    // alihkan halaman ke halaman pegawai
    return redirect('/home');
 
    }

    public function cari(Request $request)
    {
        // menangkap data pencarian
        $cari = $request->cari;
 
            // mengambil data dari table pegawai sesuai pencarian data
        $parkir = DB::table('tb_parkir')->join('kendaraan', 'tb_parkir.id_kendaraan', '=', 'kendaraan.id_kendaraan')
        ->where('plat','like',"%".$cari."%")
        ->paginate();
 
            // mengirim data pegawai ke view index
        return view('home',['parkir' => $parkir]);
 
    }
}
