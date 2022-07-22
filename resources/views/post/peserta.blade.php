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
    </fieldset>
</body>
</html>