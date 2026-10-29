@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card shadow-sm">
            <div class="card-body">
                <h3 class="card-title fw-bold text-primary">Selamat Datang di Dashboard transLive!</h3>
                <p class="card-text">Halo, <strong>{{ Auth::user()->name }}</strong>. Anda berhasil login ke dalam sistem pengolahan rute dan tiket transportasi umum.</p>
                
                <hr>
                
                <div class="row mt-4">
                    <div class="col-md-4">
                        <div class="card bg-primary text-white mb-3">
                            <div class="card-body">
                                <h5>Kelola Rute</h5>
                                <p class="card-text">Atur daftar rute & jadwal armada.</p>
                                <a href="{{ route('rute.index') }}" class="btn btn-light btn-sm text-primary fw-bold">Buka Rute</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card bg-info text-white mb-3">
                            <div class="card-body">
                                <h5>Live Tracking</h5>
                                <p class="card-text">Lacak posisi bus secara real-time.</p>
                                <a href="{{ route('tracking') }}" class="btn btn-light btn-sm text-info fw-bold">Lacak Sekarang</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card bg-success text-white mb-3">
                            <div class="card-body">
                                <h5>Tiket Saya</h5>
                                <p class="card-text">Lihat tiket & QR Code perjalanan.</p>
                                <a href="{{ route('tiket') }}" class="btn btn-light btn-sm text-success fw-bold">Cek Tiket</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection