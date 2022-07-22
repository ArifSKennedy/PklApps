<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table border="1" align='center'>
        <h3 align="center">Tabel </h3>
        <tr>
            <td></td>
            <td>id_karyawan</td>
            <td>nm_karyawan</td>
            <td>JK</td>
        </tr>
        <?php $no=1; ?>
        @foreach ($karyawan as $data)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $data['id_karyawan'] }}</td>
                <td>{{ $data['nm_karyawan'] }}</td>
                <td>{{ $data['JK'] }}</td>
            </tr>
        @endforeach   
    </table>

    <table border="1" align='center'>
        <h3 align="center">Tabel </h3>
        <tr>
            <td></td>
            <td>id_pengunjung</td>
            <td>nm_pengunjung</td>
            <td>alamat</td>
            <td>JK</td>
            <td>no_tlp</td>
            <td>no_ktp</td>
        </tr>
        <?php $no=1; ?>
        @foreach ($pengunjung as $data)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $data['id_pengunjung'] }}</td>
                <td>{{ $data['nm_pengunjung'] }}</td>
                <td>{{ $data['alamat'] }}</td>
                <td>{{ $data['JK'] }}</td>
                <td>{{ $data['no_tlp'] }}</td>
                <td>{{ $data['no_ktp'] }}</td>

            </tr>
        @endforeach   
    </table>

    <table border="1" align='center'>
        <h3 align="center">Tabel </h3>
        <tr>
            <td></td>
            <td>no_transaksi</td>
            <td>id_pengunjung</td>
            <td>id_karyawan</td>
            <td>jmlh_kamar</td>
            <td>tgl_masuk</td>
            <td>tgl_keluar</td>
            <td>lama_nginap</td>
            <td>total_harga</td>
        </tr>
        <?php $no=1; ?>
        @foreach ($transaksi as $data)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $data['no_transaksi'] }}</td>
                <td>{{ $data['id_pengunjung'] }}</td>
                <td>{{ $data['id_karyawan'] }}</td>
                <td>{{ $data['jmlh_kamar'] }}</td>
                <td>{{ $data['tgl_masuk'] }}</td>
                <td>{{ $data['tgl_keluar'] }}</td>
                <td>{{ $data['lama_nginap'] }}</td>
                <td>{{ $data['total_harga'] }}</td>

            </tr>
        @endforeach   
    </table>
    <table border="1" align='center'>
        <h3 align="center">Tabel </h3>
        <tr>
            <td></td>
            <td>id_dtl_transaksi</td>
            <td>no_transaksi</td>
            <td>no_kamar</td>
        </tr>
        <?php $no=1; ?>
        @foreach ($detailtransaksi as $data)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $data['id_dtl_transaksi'] }}</td>
                <td>{{ $data['no_transaksi'] }}</td>
                <td>{{ $data['no_kamar'] }}</td>
            </tr>
        @endforeach   
    </table>

    <table border="1" align='center'>
        <h3 align="center">Tabel </h3>
        <tr>
            <td></td>
            <td>no_kamar</td>
            <td>jenis_kamar</td>
            <td>harga</td>
        </tr>
        <?php $no=1; ?>
        @foreach ($kamar as $data)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $data['no_kamar'] }}</td>
                <td>{{ $data['jenis_kamar'] }}</td>
                <td>{{ $data['harga'] }}</td>
            </tr>
        @endforeach   
    </table>
    
</body>
</html>