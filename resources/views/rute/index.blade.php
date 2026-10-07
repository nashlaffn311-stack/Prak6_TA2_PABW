@extends('layouts.app')

@section('title', 'Daftar Rute - transLive')

@section('content')
    <h2 class="fw-bold mb-3">Daftar Rute Bus & Angkutan</h2>

    <x-alert type="success" message="Data rute berhasil dimuat dari controller." />

    <div class="row mt-4">
        @forelse($ruteList as $rute)
            <div class="col-md-4 mb-4">
                @include('partials.rute-card', ['rute' => $rute])
            </div>
        @empty
            <div class="col-12">
                <div class="alert alert-warning text-center">
                    Belum ada data rute yang tersedia.
                </div>
            </div>
        @endforelse
    </div>
@endsection