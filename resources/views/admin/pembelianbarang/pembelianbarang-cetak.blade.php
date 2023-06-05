<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Pembelian Barang</title>

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
    <h1>Data Pembelian Barang</h1>
    <table align="center">
        <thead>
            <tr>
                <th>ID Pembelian</th>
                <th>ID Supplier</th>
                <th>ID Admin</th>
                <th>Nama Barang</th>
                <th>Jumlah Pembelian</th>
                <th>Tanggal Pembelian</th>
                <th>Harga Pembelian</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $pb)
            <tr>
                <td>{{$pb->Id_Pembelian}}</td>
                <td>{{$pb->Id_Supplier}}</td>
                <td>{{$pb->Id_admin}}</td>
                <td>{{$pb->Nama_Barang}}</td>
                <td>{{$pb->Jumlah}}</td>
                <td>{{$pb->Tanggal_Pembelian}}</td>
                <td>{{$pb->Harga_Pembelian}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
