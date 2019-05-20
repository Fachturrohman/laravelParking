@extends('layouts.admin')

  <link rel="stylesheet" href="{{url('assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">

@section('content')
<section class="content-header">
      <h1>
        DATA PARKIR
      </h1>
      <ol class="breadcrumb">
        <li><a href=""><i class="fa fa-dashboard"></i>Home</a></li>
        <li class="active">Data Parkir</li>
      </ol>
    </section>

    <!-- Main content -->
        <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box box-success">
            <div class="box-header with-border">
              <h4><b>Tambah Data : &emsp;&emsp; Ekspor Data :</b></h4>
                      <a href="/admin/tambah" class="btn btn-md btn-primary btn-sm">
                      <i class="glyphicon glyphicon-plus"></i> Tambah Data</a>
                        &emsp;&emsp;&emsp;&nbsp;&nbsp;
                      <a href="/excel-view" class="btn bg-olive btn-primary btn-sm">
                      <i class="glyphicon glyphicon-export"></i> Ekspor Data</a><p>

              <h4><p><b>Masukan Plat Number :</b></p></h4>
                <form action="/admin/cari" method="GET">
                    <input type="text" name="cari" placeholder="Masukan Plat Number" value="{{ old('cari') }}">
                    <input type="submit" class="btn bg-navy btn-sm" value="CARI">
                </form>                     
            </div>
            <div class="box-body">
              <div class="table-responsive">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                    <tr>
                        <th>No</th>
                        <th>Plat Number</th>
                        <th>Jenis</th>
                        <th>Merk</th>
                        <th>Nama Pemilik</th>
                        <th>Tanggal</th>
                        <th>Harga / Jam</th>
                        <th>Opsi</th>
                    </tr>
                  </thead>
                  <tbody>
                      <?php $no = 0;?>
                      @foreach($parkir as $p)
                      <?php $no++ ;?>
                      <tr>
                        <td>{{ $no }}</td>
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
                  </tbody>
              </table>
            </div>
          </div>
          </div>
    </div> 
  </div>     
</section>

<script src="{{ url('assets/dist/js/adminlte.min.js') }}"></script>
<script src="{{ url('assets/bower_components/jquery/dist/jquery.min.js') }}"></script>
<script src="{{ url('assets/dist/js/demo.js') }}"></script>
<script src="{{url('assets/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{url('assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': true,
      'searching'   : false,
      'ordering'    : true,
      'info'        : false,
      'autoWidth'   : false
    })
  })
</script>
@endsection