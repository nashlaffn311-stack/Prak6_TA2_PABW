<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RuteController extends Controller
{
    public function index()
    {
        $ruteList = [
            [
                'kode' => 'TL-01',
                'asal' => 'Terminal Ciakar',
                'tujuan' => 'Jatinangor',
                'jam' => '07:00 WIB',
                'tarif' => 10000,
                'status' => 'Tersedia'
            ],
            [
                'kode' => 'TL-02',
                'asal' => 'Alun-Alun Sumedang',
                'tujuan' => 'Tembong',
                'jam' => '08:30 WIB',
                'tarif' => 5000,
                'status' => 'Hampir Penuh'
            ],
            [
                'kode' => 'TL-03',
                'asal' => 'Sumedang',
                'tujuan' => 'Wado',
                'jam' => '10:00 WIB',
                'tarif' => 15000,
                'status' => 'Penuh'
            ],
        ];

        return view('rute.index', compact('ruteList'));
    }
}