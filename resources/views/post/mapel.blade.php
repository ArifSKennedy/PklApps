<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <fieldset>
        <legend align="center">DATA POST</legend>
        <table border="1" align='center'>
            <h3 align="center">Tabel Siswa</h3>
            <tr>
                <td>No</td>
                <td>No Siswa</td>
                <td>nama</td>
                <td>jk</td>
                <td>jurusan</td>
            </tr>
            <?php $no=1; ?>
            @foreach ($siswa as $data)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $data['no'] }}</td>
                    <td>{{ $data['nama'] }}</td>
                    <td>{{ $data['jk'] }}</td>
                    <td>{{ $data['jurusan'] }}</td>
                </tr>
            @endforeach
            
        </table>
        <br>
        <table border="1" align='center'>
            <h3 align="center">Tabel Peserta</h3>
            <tr>
                <td>No</td>
                <td>No Siswa</td>
                <td>Kode_MP</td>
            </tr>
            <?php $no=1; ?>
            @foreach ($peserta as $data)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $data['no'] }}</td>
                    <td>{{ $data['Kode_MP'] }}</td>
                </tr>
            @endforeach
            
        </table>
        <br>
        <table border="1" align='center'>
            <h3 align="center">Tabel Mapel</h3>
            <tr>
                
                <td>Kode_mp</td>
                <td>NAMA_MP</td>
                <td>SKS</td>
                <td>SEMESTER</td>
            </tr>
            
            @foreach ($mapel as $data)
                <tr>
                    
                    
                    <td>{{ $data['Kode_MP'] }}</td>
                    <td>{{ $data['NAMA_MP'] }}</td>
                    <td>{{ $data['SKS'] }}</td>
                    <td>{{ $data['SEMESTER'] }}</td>
                </tr>
            @endforeach
            
        </table>
    </fieldset>
</body>
</html>