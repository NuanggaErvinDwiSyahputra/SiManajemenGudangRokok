<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Barang Return Pembelian</title>

    <style>
        body {
            box-sizing: border-box;
            font-size: 16px;
        }

        h1 {
            text-align: center;
        }

        table {
            box-sizing: border-box;
            border: 2px solid black;
            border-collapse: collapse;
            width: 100%;
        }

        thead {
            background-color: #0d47a1;
            color: white;
        }

        table,
        th,
        td {
            border: 1px solid black;
        }

        th,
        td {
            text-align: left;
            padding: 10px;
        }

        .center {
            text-align: center;
        }

    </style>
</head>

<body>
    <h1>Data Barang Return Pembelian</h1>
    <table align="center">
        <thead>
            <tr>
                <th>ID Barang Return Pembelian</th>
                <th>ID Barang</th>
                <th>ID Admin</th>
                <th>Tanggal Return Pembelian</th>
                <th>Jumlah Barang Return Pembelian</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $brp)
            <tr>
                <td>{{$brp->Id_BarangReturnPembelian}}</td>
                <td>{{$brp->Id_Barang}}</td>
                <td>{{$brp->Id_Admin}}</td>
                <td>{{$brp->Tanggal_Return}}</td>
                <td>{{$brp->Jumlah_BarangReturnPembelian}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
