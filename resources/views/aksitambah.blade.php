@extends('layouts.admin')


@section('content')
<section class="content-header">
      <h1>
        TAMBAH DATA
      </h1>
      <ol class="breadcrumb">
        <li><a href="/admin"><i class="fa fa-dashboard"></i>Home</a></li>
        <li><a href="/admin">Data Parkir</a></li>
        <li class="active">Tambah Data</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="col-md-10">
      <div class="box box-info">
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
            <form action="/admin/store" method="post" role="form">
              <div class="box-body">
                {{ csrf_field() }}
                    <div class="table-responsive">
                <div class="col-md-3 form-group">
                  <label>Plat Number</label>
                  <input type="text" placeholder="Isi Plat Number" name="plat" class="form-control" value="" required>
                </div>
                <div class="col-md-3 form-group">
                  <label>Jenis Kendaraan</label>
                  <select class="form-control" name="id_kendaraan">
                                    @foreach ($kendaraan as $p)
                                          <option value="{{ $p->id_kendaraan }}">{{ $p->jenis }}</option>
                                    @endforeach
                                </select>
                </div>
                <div class="col-md-3 form-group">
                  <label>Merk Kendaraan</label>
                  <input type="text" placeholder="Merk Kendaraan" name="merk" class="form-control" value="" required>
                </div>
                <div class="col-md-3 form-group">
                  <label>Nama Pemilik</label>
                  <input type="text" placeholder="Isi Nama Kendaraan" name="nama" class="form-control " value="" required>
                </div>
                <div class="col-md-3 form-group">
                  <label>Tanggal</label>
                  <input type="date" name="tanggal" class="form-control"  value="{{Carbon\Carbon::today()->toDateString() }}" readonly="readonly">
                </div>
                <div class="col-md-3 form-group">
                  <label>Harga Parkir </label>
                  <input type="text" name="harga" class="form-control" value="{{5000}}" readonly="readonly">
                </div>
                </div>
              </div>
              <div class="box-footer">
                <input type="submit" class="btn btn-success" value="Simpan"> 
                <a href="/admin" class="btn btn-primary btn-md">Kembali</a>
              </div>
            </form>
          </div>
          </div>
        </div>
    </section>
@endsection