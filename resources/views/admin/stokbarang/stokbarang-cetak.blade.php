<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Stok Barang</title>

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
    <h1>Data Stok Barang</h1>
    <table align="center">
        <thead>
            <tr>
                <th>ID Stok Barang</th>
                <th>ID Barang</th>
                <th>ID Kategori</th>
                <th>ID Admin</th>
                <th>Stok Barang</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $sd)
            <tr>
                <td>{{$sd->Id_StokBarang}}</td>
                <td>{{$sd->Id_Barang}}</td>
                <td>{{$sd->Id_Kategori}}</td>
                <td>{{$sd->Id_Admin}}</td>
                <td>{{$sd->Stok_Barang}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
