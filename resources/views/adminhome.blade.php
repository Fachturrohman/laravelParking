@extends('layouts.app')

@section('content')
<div class="col-xs-12 container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Admin Dashboard</div>  
                <div class="card-body">
                    <a href="/admin/tambah" class="btn btn-sm btn-primary">
                    <i class="glyphicon glyphicon-plus"></i> Tambah Data</a>
                        <a href="/admin/tambahkendaraan" class="btn btn-sm btn-danger">
                    <i class="glyphicon glyphicon-plus"></i> Tambah Data Kendaraan</a><p>
                    
                    <p><b>Masukan Plat Number :</b></p>
                <form action="/admin/cari" method="GET">
                    <input type="text" name="cari" class="col-md-3" placeholder="Masukan Plat Number" value="{{ old('cari') }}">
                    <input type="submit" class="btn btn-primary btn-sm" value="CARI">
                </form><p>

            <div class="table-responsive">
                <table class="table table-striped">
                         <tr>
                             <th>Plat Number</th>
                             <th>Jenis</th>
                             <th>Merk</th>
                             <th>Nama Pemilik</th>
                             <th>Tanggal</th>
                             <th>Harga / Jam</th>
                             <th>Opsi</th>
                         </tr>
                        
                         @foreach($parkir as $p)
                         <tr>
                             <td>{{ $p->plat }}</td>
                             <td>{{ $p->jenis }}</td>
                             <td>{{ $p->merk }}</td>
                             <td>{{ $p->nama }}</td>
                             <td>{{ $p->tanggal }}</td>
                             <td>Rp.{{ number_format($p->harga) }}</td>
                             <td>
                                 <a href="/home/cetak/{{ $p->id_parkir }}" class="btn btn-warning btn-sm">Cetak</a>
                                 |
                                 <a href="/admin/edit/{{ $p->id_parkir }}" class="btn btn-success btn-sm">Edit</a>
                                 |
                                 <a href="/admin/hapus/{{ $p->id_parkir }}" class="btn btn-danger btn-sm" onclick="return confirm('Anda yakin menghapus data ini?')">Hapus</a>
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
