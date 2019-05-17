<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\PesertaExport;
use Excel;
use App\Exports\ParkirExport;

class ExcelController extends Controller
{
    public function export() 
    {
        return Excel::download(new ParkirExport, 'parkir.xlsx');
    }
}
