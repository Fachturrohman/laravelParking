@extends('layouts.admin')

@section('content')
<section class="content-header">
      <h1>
        EDIT DATA
      </h1>
      <ol class="breadcrumb">
        <li><a href="/admin"><i class="fa fa-dashboard"></i>Home</a></li>
        <li><a href="/admin">Data Parkir</a></li>
        <li class="active">Edit Data</li>
      </ol>
    </section>

<section class="content">
  <div class="container">
    <div class="col-md-8">
      <div class="box box-warning">
        <div class="box-header with-border">
          <h3 class="box-title">Edit Data</h3>
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
              @foreach($parkir as $p)
            <form action="/admin/update" method="post" role="form">
              <div class="box-body">
              {{ csrf_field() }}
                <div class="table-responsive">
                  <div class="form-group">
                    <input type="hidden" name="id" value="{{ $p->id_parkir }}"> <br/>
                    <label>Nama Pemilik</label>
                    <input type="text" placeholder="Isi Nama Kendaraan" name="nama" class="form-control" value="{{ $p->nama }}">
                  </div>
                  <div class="form-group">
                    <label>Plat Number</label>
                    <input type="text" placeholder="Isi Plat Number" name="plat" class="form-control" value="{{ $p->plat }}" readonly="readonly">
                  </div>
                @endforeach
                  <div class="form-group">
                    <label>Jenis Kendaraan</label>
                    <select class="form-control" name="id_kendaraan">
                      @foreach ($kendaraan as $k)
                        <option value="{{ $k->id_kendaraan }}"
                          @if($k->id_kendaraan === $p->id_kendaraan)
                          selected
                          @endif
                          >{{ $k->jenis }}</option>
                      @endforeach
                    </select>
                  </div>
                @foreach ($parkir as $p)
                  <div class="form-group">
                    <label>Merk Kendaraan</label>
                    <input type="text" placeholder="Merk Kendaraan" name="merk" class="form-control" value="{{ $p->merk }}" required>
                  </div>
                  <div class="form-group">
                    <label>Tanggal Parkir</label>
                    <input type="date" name="tanggal" class="form-control"  value="{{ $p->tanggal }}" >
                  </div>
                  <div class="form-group">
                    <label>Harga parkir</label>
                    <input type="text" name="harga" class="form-control" value="{{ $p->harga }}" >
                  </div>
                </div>
                <div class="box-footer">
                  <input type="submit" class="btn btn-success" value="Simpan"> 
                  <a href="/admin" class="btn btn-primary btn-md">Kembali</a>
                </div>
            </form>
                @endforeach
          </div>
        </div>
    </div>
</section>
@endsection