<div class="card h-100 shadow-sm border-0">
    <div class="card-body">
        <div class="d-flex justify-content-between align-items-center mb-2">
            <span class="badge bg-secondary">{{ $rute['kode'] }}</span>
            
            @if($rute['status'] === 'Tersedia')
                <span class="badge bg-success">Tersedia</span>
            @elseif($rute['status'] === 'Hampir Penuh')
                <span class="badge bg-warning text-dark">Hampir Penuh</span>
            @else
                <span class="badge bg-danger">Penuh</span>
            @endif
        </div>

        <h5 class="card-title text-primary fw-bold">{{ $rute['asal'] }} &rarr; {{ $rute['tujuan'] }}</h5>
        <p class="card-text text-muted mb-1">Jam: <strong>{{ $rute['jam'] }}</strong></p>
        <p class="card-text text-dark fw-bold">Tarif: Rp {{ number_format($rute['tarif'], 0, ',', '.') }}</p>

        @if($rute['status'] !== 'Penuh')
            <a href="#" class="btn btn-primary btn-sm w-100">Pesan Tiket</a>
        @else
            <button class="btn btn-secondary btn-sm w-100" disabled>Penuh</button>
        @endif
    </div>
</div>