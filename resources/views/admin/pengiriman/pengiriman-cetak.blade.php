<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Pengiriman</title>

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
    <h1>Data Pengiriman</h1>
    <table align="center">
        <thead>
            <tr>
                <th>ID Pengiriman</th>
                <th>ID Penjualan</th>
                <th>ID Barang Keluar</th>
                <th>ID Outlet</th>
                <th>ID Admin</th>
                <th>Tanggal Pengiriman</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $pr)
            <tr>
                <td>{{$pr->Id_Pengiriman}}</td>
                <td>{{$pr->id_penjualan}}</td>
                <td>{{$pr->Id_BarangKeluar}}</td>
                <td>{{$pr->id_outlet}}</td>
                <td>{{$pr->Id_Admin}}</td>
                <td>{{$pr->Tanggal_Pengiriman}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
