<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        $data['nama'] = 'Maysarah';
        $data['umur'] = '20 Tahun';
        $data['kampus'] = 'Universitas Lambung Mangkurat';
        $data['prodi'] = 'Pendidikan Komputer';
        $data['domisili'] = 'Banjarmasin, Kalimantan Selatan';
        $data['hobi'] = 'Membaca, Mendengarkan Lagu';

        return view('profile', $data);
    }
}
