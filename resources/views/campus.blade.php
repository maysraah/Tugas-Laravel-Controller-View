@extends('layouts.main')

@section('container')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata Diri</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
        }
        .info {
            font-size: 18px;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Profil Kampus Pengembang</h1><br>
        <table class="info">
            <tr>
                <th>Nama Kampus:</th>
                <td>{{ $nama_kampus }}</td>
            </tr>
            <tr>
                <th>Alamat:</th>
                <td>{{ $alamat }}</td>
            </tr>
            <tr>
                <th>Tanggal Didirikannya:</th>
                <td>{{ $tanggal_lahir }}</td>
            </tr>
            <tr>
                <th>Akreditasi:</th>
                <td>{{ $akreditasi }}</td>
            </tr>
            <tr>
                <th>Email:</th>
                <td>{{ $email }}</td>
            </tr>
            <tr>
                <th>Informasi Tambahan:</th>
                <td>{{ $info }}</td>
            </tr>
        </table>        
    </div>
</body>
</html>

@endsection
