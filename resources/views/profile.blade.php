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
        <h1>Profil Pengembang</h1>
        <table class="info">
            <tr>
                <th>Nama:</th>
                <td>{{ $nama }}</td>
            </tr>
            <tr>
                <th>Umur:</th>
                <td>{{ $umur }}</td>
            </tr>
            <tr>
                <th>Asal Kampus:</th>
                <td>{{ $kampus }}</td>
            </tr>
            <tr>
                <th>Program Studi:</th>
                <td>{{ $prodi }}</td>
            </tr>
            <tr>
                <th>Domisili:</th>
                <td>{{ $domisili }}</td>
            </tr>
            <tr>
                <th>Hobi:</th>
                <td>{{ $hobi }}</td>
            </tr>
        </table>
        
    </div>
</body>
</html>

@endsection
