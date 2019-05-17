<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Invoice</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <style>
        body{
            font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            color:#333;
            text-align:left;
            font-size:18px;
            margin:0;
        }
        .container{
            margin:0 auto;
            margin-top:35px;
            padding:40px;
            width:750px;
            height:auto;
            background-color:#fff;
        }
        caption{
            font-size:28px;
            margin-bottom:15px;
        }
        table{
            border:1px solid #333;
            border-collapse:collapse;
            margin:0 auto;
            width:740px;
        }
        td, tr, th{
            padding:8px;
            border:1px solid #333;
            width:15px;
        }
        th{
            background-color: #f0f0f0;
        }
        h4, p{
            margin:0px;
        }
    </style>
</head>
<body>
    <div class="container">
        <table>
            <caption>
                Aplikasi Parkir Berkah
            </caption>
            <thead>
                <tr>
                    <th colspan="6">Parkiran <strong>#</strong></th>
                </tr>
                <tr>
                    <td colspan="2">
                        <h4>Lokasi: </h4>
                        <p>Padalarang.<br>
                            Jl Sultan Hasanuddin<br>
                            support@pdl.id
                        </p>
                    </td>
                    <td colspan="2">
                        <h4>Kode Unik: </h4>
                        <h2>
                        <p>
                        	<center>
                        	{{ rand (0,1000000000)}}
							</center>
                        </p>
                    </h2>
                    </td>
                    <td colspan="2">
                        <h4>Perhatian: </h4>
                        <h2>
                        <p>
                            Jangan Tinggalkan Barang Bawaan Anda
                        </p>
                    </h2>
                    </td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>Plat Number</th>
                    <th>Jenis</th>
                    <th>Merk</th>
                    <th>Nama</th>
                    <th>Tanggal</th>
                    <th>Harga</th>
                </tr>
			@foreach($parkir as $p)
			<tr>
				<td>{{$p->plat}}</td>
                <td>{{ $p->jenis }}</td>
                <td>{{ $p->merk}}</td>
				<td>{{$p->nama}}</td>
				<td>{{$p->tanggal}}</td>
				<td>Rp. {{ number_format($p->harga)}}</td>
			</tr>
			@endforeach
            </tbody>
        </table>
    </div>
</body>
</html>