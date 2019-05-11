@extends('layouts.app')

@section('content')
<div class="col-xs-12 container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>  
                <div class="card-body">
                    <a href="/home/tambah" class="btn btn-sm btn-primary">
                    <i class="glyphicon glyphicon-plus"></i> Tambah Data</a><p>
                    
                    <p><b>Masukan Plat Number :</b></p>
                <form action="/home/cari" method="GET">
                    <input type="text" name="cari" class="col-md-3" placeholder="Masukan Plat Number" value="{{ old('cari') }}">
                    <input type="submit" class="btn btn-primary btn-sm" value="CARI">
                </form><p>

            <div class="table-responsive">
                <table class="table table-striped">
                         <tr>
                             <th>Plat Number</th>
                             <th>Nama Pemilik</th>
                             <th>Tanggal</th>
                             <th>Harga / Jam</th>
                             <th>Opsi</th>
                         </tr>
                         @foreach($parkir as $p)
                         <tr>
                             <td>{{ $p->plat }}</td>
                             <td>{{ $p->nama }}</td>
                             <td>{{ $p->tanggal }}</td>
                             <td>Rp.{{ number_format($p->harga) }}</td>
                             <td>
                                 <a href="/home/cetak/{{ $p->id_parkir }}" class="btn btn-success btn-sm">Cetak</a>
                             </td>
                         </tr>
                         @endforeach
                   </table>
                   </div>
               </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
