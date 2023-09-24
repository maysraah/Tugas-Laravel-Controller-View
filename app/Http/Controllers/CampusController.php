<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CampusController extends Controller
{
    public function index()
    {
        $data['nama_kampus'] = 'Universitas Lambung Mangkurat (ULM)';
        $data['alamat'] = 'Jl. Brigjen H. Hasan Basri, Kayu Tangi, Banjarmasin, Indonesia, Kotak Pos 219';
        $data['tanggal_lahir'] = '21 September 1958';
        $data['akreditasi'] = 'A';
        $data['email'] = 'humas@ulm.ac.id';
        $data['info'] = 'ULM merupakan perguruan tinggi yang tertua di Kalimantan.';

        return view('campus', $data);
    }
}
