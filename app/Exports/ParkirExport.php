<?php

namespace App\Exports;

use App\parkir;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Illuminate\Support\Facades\DB;

class ParkirExport implements FromView
{
    public function view(): View
    {   
        return view('exports.parkir', [
            'data' => DB::table('tb_parkir')->join('kendaraan', 'tb_parkir.id_kendaraan', '=', 'kendaraan.id_kendaraan')->get()
        ]);        
    }
}