@extends('layouts.app')

@section('content')
 <div class="container"> 
 	<div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Pendataan Parkir</div>
            <div class="card-body"> 
            	 <center><h1>Masukan Data Baru</h1></center> <br>
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
                <form action="/admin/update" method="post">
                	{{ csrf_field() }}
                	<div class="table-responsive">
                    <table class="table table-striped">
                        <tr>
                            <input type="hidden" name="id" value="{{ $p->id_parkir }}"> <br/>
                                <td>Nama Pemilik</td> 
                            <td> 
                                <div class="col-sm-8"> 
                                    <input type="text" placeholder="Isi Nama Kendaraan" name="nama" class="form-control" value="{{ $p->nama }}"> 
                                </div>
                            </td>
                        </tr>
                        <tr> 
                                <td>Plat</td> 
                            <td> 
                                <div class="col-sm-8"> 
                                    <input type="text" placeholder="Isi Plat Number" name="plat" class="form-control" value="{{ $p->plat }}" readonly="readonly"> 
                                </div>
                            </td>
                        </tr>
                        <tr> 
                                <td>Tanggal</td> 
                            <td> 
                                <div class="col-sm-8"> 
                                    <input type="date" name="tanggal" class="form-control"  value="{{ $p->tanggal }}" > 
                                </div>
                            </td>
                        </tr> 
                        <tr> 
                                <td>Harga</td> 
                            <td> 
                                <div class="col-sm-8	"> 
                            	   <input type="text" name="harga" class="form-control" value="{{ $p->harga }}" >     
                                </div>
                            </td>
                        </tr> 
                        <tr> 
                            <td colspan="2">
                                <input type="submit" class="btn btn-success" value="Simpan"> 
							    <a href="/admin" class="btn btn-primary btn-md">Kembali</a>
                            </td> 
                        </tr>
                    </table> 
                </div>
                </form> 
                @endforeach
            </div>
        </div>
    </div>
            </div> 
        </div>
@endsection
