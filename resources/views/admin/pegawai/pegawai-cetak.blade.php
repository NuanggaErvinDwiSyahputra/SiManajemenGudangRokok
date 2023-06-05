<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Pegawai</title>

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
    <h1>Data Pegawai</h1>
    <table align="center">
        <thead>
            <tr>
                <th>ID Pegawai</th>
                <th>Nama Pegawai</th>
                <th>Alamat</th>
                <th>No. Telp</th>
                <th>Jenis Kelamin</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $pw)
            <tr>
                <td>{{$pw->Id_Pegawai}}</td>
                <td>{{$pw->Nama_Pegawai}}</td>
                <td>{{$pw->Alamat}}</td>
                <td>{{$pw->No_Telp}}</td>
                <td>{{$pw->Jenis_Kelamin}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
