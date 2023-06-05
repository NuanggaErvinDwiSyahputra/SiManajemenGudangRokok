<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Penjualan Barang</title>

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
    <h1>Data Penjualan Barang</h1>
    <table align="center">
        <thead>
            <tr>
                <th>ID Penjualan</th>
                <th>ID Outlet</th>
                <th>Id Admin</th>
                <th>ID Barang</th>
                <th>Jumlah</th>
                <th>Tanggal Penjualan</th>
                <th>Harga Penjualan</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $pjb)
            <tr>
                <td>{{$pjb->Id_Penjualan}}</td>
                <td>{{$pjb->Id_Outlet}}</td>
                <td>{{$pjb->Id_Admin}}</td>
                <td>{{$pjb->Id_Barang}}</td>
                <td>{{$pjb->Jumlah}}</td>
                <td>{{$pjb->Tanggal_Penjualan}}</td>
                <td>{{$pjb->Harga_Penjualan}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
