<table>
    <thead>
        <tr>
            <th>No</th>
            <th>Plat Number</th>
            <th>Jenis</th>
            <th>Merk</th>
            <th>Nama Pemilik</th>
            <th>Tanggal</th>
            <th>Harga / Jam</th>
        </tr>
    </thead>
    <tbody>
    <?php $no = 0;?>
    @foreach($data as $p)
    <?php $no++ ;?>
        <tr>
            <td>{{ $no }}</td>
            <td>{{ $p->plat }}</td>
            <td>{{ $p->jenis }}</td>
            <td>{{ $p->merk }}</td>
            <td>{{ $p->nama }}</td>
            <td>{{ $p->tanggal }}</td>
            <td>Rp.{{ number_format($p->harga) }}</td>
        </tr>
    @endforeach
    </tbody>
</table>