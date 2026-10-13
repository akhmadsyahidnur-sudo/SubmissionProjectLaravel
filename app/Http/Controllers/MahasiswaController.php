<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    // Data dummy mahasiswa 
    private $dataMahasiswa = [
        ['nama' => 'Andi', 'nim' => '2201', 'ipk' => 3.8],
        ['nama' => 'Budi', 'nim' => '2202', 'ipk' => 3.1],
        ['nama' => 'Citra', 'nim' => '2203', 'ipk' => 2.5],
        ['nama' => 'Dewi', 'nim' => '2204', 'ipk' => 1.8], // IPK di bawah 2.0 untuk tes alert
        ['nama' => 'Eko', 'nim' => '2205', 'ipk' => 3.6],
    ];

    public function profil()
    {
        return view('mahasiswa.profil', [
            'nama' => 'Nama Anda Sendiri',
            'nim' => '220000',
            'prodi' => 'Sistem Informasi'
        ]);
    }

    public function daftar()
    {
        
        $adaIpkRendah = collect($this->dataMahasiswa)->contains('ipk', '<', 2.0);

        return view('mahasiswa.daftar', [
            'mahasiswa' => $this->dataMahasiswa,
            'adaIpkRendah' => $adaIpkRendah
        ]);
    }

    public function detail($nim)
    {
        
        $mhs = collect($this->dataMahasiswa)->firstWhere('nim', $nim);
        
        
        abort_unless($mhs, 404);

        return view('mahasiswa.detail', compact('mhs'));
    }
}