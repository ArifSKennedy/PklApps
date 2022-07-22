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
        <legend>Data post</legend>
        <table border="1">
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
    </fieldset>
</body>
</html>