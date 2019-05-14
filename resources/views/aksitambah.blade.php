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
                <form action="/admin/store" method="post">
                	{{ csrf_field() }}
                	<div class="table-responsive">
                    <table class="table table-striped">
                        <tr> 
                                <td>Plat</td> 
                            <td> 
                                <div class="col-sm-8"> 
                                    <input type="text" placeholder="Isi Plat Number" name="plat" class="form-control" value="" required> 
                                </div>
                            </td>
                        </tr>
                        <tr> 
                                <td>Merk</td> 
                            <td> 
                                <div class="col-sm-8"> 
                                    <input type="text" placeholder="Merk Kendaraan" name="merk" class="form-control" value="" required> 
                                </div>
                            </td>
                        </tr>
                        <tr> 
                                <td>Nama Pemilik</td> 
                            <td> 
                                <div class="col-sm-8"> 
                                    <input type="text" placeholder="Isi Nama Kendaraan" name="nama" class="form-control " value="" required> 
                                </div>
                            </td>
                        </tr>
                        <tr> 
                                <td>Tanggal</td> 
                            <td> 
                                <div class="col-sm-8"> 
                                    <input type="date" name="tanggal" class="form-control"  value="{{Carbon\Carbon::today()->toDateString() }}" readonly="readonly"> 
                                </div>
                            </td>
                        </tr> 
                        <tr> 
                                <td>Harga</td> 
                            <td> 
                                <div class="col-sm-8	"> 
                            	   <input type="text" name="harga" class="form-control" value="{{5000}}" readonly="readonly">     
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
            </div>
        </div>
    </div>
            </div> 
        </div>
@endsection
