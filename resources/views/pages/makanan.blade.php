<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    @if ($pilih == 'ayamgoreng')
        <br> pesanan {{ $pilih }}
        <br> harga {{ $pilih }} RP . 150000
    @elseif ($pilih == 'lobster')
        <br> pesanan {{ $pilih }}
        <br> harga {{ $pilih }} RP . 20000
    @elseif ($pilih == 'pizza')
        <br> pesanan {{ $pilih }}
        <br> harga {{ $pilih }} RP . 50000
    @elseif ($pilih == 'tiramisu')
        <br> pesanan {{ $pilih }}
        <br> harga {{ $pilih }} RP . 30000
    @elseif ($pilih == 'pasta')
        <br> pesanan {{ $pilih }}
        <br> harga {{ $pilih }} RP . 25000
    @else
        makanan tidak ada
    @endif
    <br>
    <hr>


    @if ($pilih2 == 'ayamgoreng')
        <br> pesanan {{ $pilih2 }}
        <br> harga {{ $pilih2 }} RP . 150000
    @elseif ($pilih2 == 'lobster')
        <br> pesanan {{ $pilih2 }}
        <br> harga {{ $pilih2 }} RP . 20000
    @elseif ($pilih2 == 'pizza')
        <br> pesanan {{ $pilih2 }}
        <br> harga {{ $pilih2 }} RP . 50000
    @elseif ($pilih2 == 'tiramisu')
        <br> pesanan {{ $pilih2 }}
        <br> harga {{ $pilih2 }} RP . 30000
    @elseif ($pilih2 == 'pasta')
        <br> pesanan {{ $pilih2 }}
        <br> harga {{ $pilih2 }} RP . 25000
    @else
        makanan tidak ada
    @endif















</body>

</html>
