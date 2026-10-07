@extends('layouts.app')

@section('title', 'Beranda - transLive')

@section('content')
    <div class="p-5 mb-4 bg-white rounded-3 shadow-sm text-center">
        <h1 class="display-5 fw-bold text-primary">Selamat Datang di transLive</h1>
        <p class="fs-5">Layanan Pemesanan Tiket & Live Tracking Angkutan Sumedang</p>
        <a href="{{ route('rute.index') }}" class="btn btn-primary btn-lg mt-2">Lihat Daftar Rute</a>
    </div>
@endsection