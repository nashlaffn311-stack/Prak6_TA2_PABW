@extends('layouts.app')

@section('content')
<div class="row justify-content-center mt-4">
    <div class="col-md-5">
        <div class="card shadow-sm border-0">
            <div class="card-header bg-primary text-white text-center py-3">
                <h4 class="mb-0 fw-bold">Login transLive</h4>
            </div>
            <div class="card-body p-4">
                
                <!-- Status Session (misal setelah reset password) -->
                @if (session('status'))
                    <div class="alert alert-success mb-3">{{ session('status') }}</div>
                @endif

                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="mb-3">
                        <label for="email" class="form-label">Email Address</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autofocus>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required>
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="mb-3 form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember_me">
                        <label class="form-check-label" for="remember_me">Ingat Saya</label>
                    </div>

                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-primary btn-block">Masuk</button>
                    </div>
                </form>
            </div>
            <div class="card-footer text-center bg-white py-3">
                <small class="text-muted">Belum punya akun? <a href="{{ route('register') }}" class="text-primary text-decoration-none">Daftar sekarang</a></small>
            </div>
        </div>
    </div>
</div>
@endsection