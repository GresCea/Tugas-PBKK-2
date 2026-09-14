<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class HomeController extends Controller
{
    public function home(): View
    {
        return view('home', [
            'nama' => 'Joaquin Fairuz Nawfal Ismono',
            'nrp' => '5025241106',
            'programStudi' => 'Teknik Informatika',
        ]);
    }

    public function profile(string $nrp): View
    {
        return view('mahasiswa.profile', [
            'mahasiswa' => [
                'nama' => 'Joaquin Fairuz Nawfal Ismono',
                'nrp' => $nrp,
                'programStudi' => 'Teknik Informatika',
                'fakultas' => 'Fakultas Teknologi Elektro dan Informatika Cerdas (FT-EIC)',
                'email' => 'joaquinnawfal@gmail.com',
                'kampus' => 'Insititut Teknologi Sepuluh Nopember (ITS)'
            ],
        ]);
    }

    public function agent(?string $tema = null): View
    {
        $tema = $tema ?: 'General Assistant Agent';

        return view('agent.idea', compact('tema'));
    }

    public function calculateGpa(float $ip1, float $ip2): View
    {
        $total = $ip1 + $ip2;
        $average = $total / 2;

        return view('dashboard.gpa', compact('ip1', 'ip2', 'total', 'average'));
    }
}
