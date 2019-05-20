@extends('layouts.admin.kendaraan')

@section('content')
<section class="content">
  <div class="row">
    <div class="col-md-5">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Tambah Data</h3>
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
    <div class="col-md-5">
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
                </tr>
                </thead>
                <tbody>
                  <?php $no = 0;?>
                  @foreach($kendaraan as $p)
                  <?php $no++ ;?>
                    <tr>
                      <td>{{ $no }}</td>
                      <td>{{ $p->jenis }}</td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
@endsection