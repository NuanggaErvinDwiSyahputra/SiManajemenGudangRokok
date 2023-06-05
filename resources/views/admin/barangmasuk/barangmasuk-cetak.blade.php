<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Barang Masuk</title>

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
    <h1>Data Barang Masuk</h1>
    <table align="center">
        <thead>
            <tr>
                <th>ID Barang Masuk</th>
                <th>ID Pembelian</th>
                <th>ID Admin</th>
                <th>Tanggal Barang Masuk</th>
                <th>Jumlah</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $br)
            <tr>
                <td>{{$br->Id_BarangMasuk}}</td>
                <td>{{$br->Id_Pembelian}}</td>
                <td>{{$br->Id_Admin}}</td>
                <td>{{$br->Tanggal_Masuk}}</td>
                <td>{{$br->Jumlah}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
