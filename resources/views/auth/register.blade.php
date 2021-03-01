@extends('layouts.auth')

@section('content')
<div class="card auth-card py-3 bg-gray-100">
    <div class="card-header bg-white px-3 my-1">
        <h4 class="d-flex tx-600">Daftar <span class="auth-logo">{{ config('app.name', 'Laravel') }}</span></h4>
    </div>
    <div class="card-body pt-2 tx-12">
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="form-group">
                <label for="name" class="form-label">Nama</label>
                <input id="name" type="text" class="form-control rounded-5 @error('name') bd bd-danger @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                @error('name')
                    <small class="tx-danger tx-bold" role="alert">{{ $message }}</small>
                @enderror
            </div>

            <div class="form-group">
                <label for="email" class="form-label">Email</label>
                <input id="email" type="email" class="form-control rounded-5 @error('email') bd bd-danger @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                @error('email')
                    <small class="tx-danger tx-bold" role="alert">{{ $message }}</small>
                @enderror
            </div>

            <div class="form-group">
                <label for="password" class="form-label">Password</label>
                <input id="password" type="password" class="form-control rounded-5 @error('password') bd bd-danger @enderror" name="password" required autocomplete="new-password">
                @error('password')
                    <small class="tx-danger tx-bold" role="alert">{{ $message }}</small>
                @enderror
            </div>

            <div class="form-group">
                <label for="password-confirm" class="form-label">Password</label>
                <input id="password-confirm" type="password" class="form-control rounded-5" name="password_confirmation" required autocomplete="new-password">
            </div>

            <button class="btn btn-info btn-block rounded-5 tx-bold mb-2">Daftar</button>
            <div class="d-flex">
                <span>Sudah punya akun? <a href="{{ route('login') }}">login</a></span>
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
