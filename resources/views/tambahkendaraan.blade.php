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
                <form action="/admin/storekendaraan" method="post">
                	{{ csrf_field() }}
                	<div class="table-responsive">
                    <table class="table table-striped">
                        <tr> 
                                <td>Jenis Kendaraan</td> 
                            <td> 
                                <div class="col-sm-8"> 
                                    <input type="text" placeholder="Jenis Kendaraan" name="jenis" class="form-control" value="" required> 
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
