@extends('layouts.auth')

@section('content')
<div class="card auth-card py-3 bg-gray-100">
    <div class="card-header bg-white px-3 my-1">
        <h4 class="d-flex tx-600">Masuk <span class="auth-logo">{{ config('app.name', 'Laravel') }}</span></h4>
    </div>
    <div class="card-body pt-2 tx-12">
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="form-group">
                <label for="email" class="form-label">Email</label>
                <input id="email" type="email" class="form-control rounded-5 @error('email') bd bd-danger @enderror" name="email" required autocomplete="email" autofocus>
                @error('email')
                    <small class="tx-danger tx-bold" role="alert">{{ $message }}</small>
                @enderror
            </div>

            <div class="form-group">
                <label for="password" class="form-label">Password</label>
                <input id="password" type="password" class="form-control rounded-5 @error('password') bd bd-danger @enderror" name="password" required autocomplete="current-password">
                @error('password')
                    <small class="tx-danger tx-bold" role="alert">{{ $message }}</small>
                @enderror
            </div>

            <div class="form-group">
                <label class="ckbox">
                    <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                    <span>Ingat saya</span>
                </label>
            </div>

            <button class="btn btn-info btn-block rounded-5 tx-bold mb-2">Masuk</button>
            <div class="d-flex">
                <span>Belum punya akun? <a href="{{ route('register') }}">daftar</a></span>
                @if (Route::has('password.request'))
                    <a class="mg-l-auto" href="{{ route('password.request') }}">
                        Lupa kata sandi
                    </a>
                @endif
            </div>
        </form>
    </div>
</div>
@endsection
