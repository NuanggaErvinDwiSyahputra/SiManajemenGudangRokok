<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Kategori</title>

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
    <h1>Data Kategori</h1>
    <table align="center">
        <thead>
            <tr>
                <th>ID Kategori</th>
                <th>ID Barang</th>
                <th>ID Admin</th>
                <th>Kategori</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $kg)
            <tr>
                <td>{{$kg->Id_Kategori}}</td>
                <td>{{$kg->Id_Barang}}</td>
                <td>{{$kg->Id_Admin}}</td>
                <td>{{$kg->Kategori}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
