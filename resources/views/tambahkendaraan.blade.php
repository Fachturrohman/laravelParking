@extends('layouts.admin.kendaraan')

@section('content')
<section class="content">
  <div class="row">
    <div class="col-md-5">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Tambah Data Kendaraan</h3>
        </div>
        @if ($errors->any())
        <div class="alert alert-danger">
          <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
        @endif
        <form action="/admin/storekendaraan" method="post" role="form">
          {{ csrf_field() }}
          <div class="box-body">
            <div class="form-group">
              <label>Jenis Kendaraan</label>
              <input type="text" placeholder="Jenis Kendaraan" name="jenis" class="form-control" value="" required>
            </div>
          </div>
          <div class="box-footer">
            <input type="submit" class="btn btn-success" value="Simpan">
          </div>
        </form>
      </div>
    </div>
    <div class="col-md-6">
      <div class="box box-info">
        <div class="box-header with-border">
          <h3 class="box-title">Data Kendaraan</h3>
        </div>
        <form class="form-horizontal">
          <div class="box-body">
            <div class="table-responsive">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Jenis Kendaraan</th>
                    <th>Opsi</th>
                </tr>
                </thead>
                <tbody>
                  <?php $no = 0;?>
                  @foreach($kendaraan as $p)
                  <?php $no++ ;?>
                    <tr>
                      <td>{{ $no }}</td>
                      <td>{{ $p->jenis }}</td>
                      <td>
                          <a href="/admin/hapuskendaraan/{{ $p->jenis }}" class="btn btn-danger btn-sm" onclick="return confirm('Anda yakin menghapus data ini?')">Hapus</a>
                      </td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </form>
      </div>
    </div>
    <div class="col-md-5">
      <div class="box box-danger">
        <div class="box-header with-border">
          <h3 class="box-title">Ubah Tarif</h3>
        </div>
        <form action="/admin/ubahtarif" method="post" role="form">
          {{ csrf_field() }}
          <div class="box-body">
            <div class="form-group">
               @foreach($harga as $h)
                <label>Tarif Sekarang : Rp. {{ number_format($h->harga)}}</label>
               @endforeach
            </div>
            <div class="form-group">
              <label>Ubah Tarif</label>
              <input type="number" placeholder="Harga" name="harga" class="form-control" value="" required>
            </div>
          </div>
          <div class="box-footer">
            <input type="submit" class="btn btn-success" value="Simpan">
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
@endsection