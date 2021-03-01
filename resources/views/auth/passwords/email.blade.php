@extends('layouts.auth')

@section('content')
<div class="card auth-card py-3 bg-gray-100">
    <div class="card-header bg-white px-3 my-1">
        <h4 class="d-flex tx-600">Reset Password <span class="auth-logo">{{ config('app.name', 'Laravel') }}</span></h4>
    </div>
    <div class="card-body pt-2 tx-12">
        @if (session('status'))
            <p class="tx-bold tx-danger">{{ session('status') }}</p>
        @endif
        
        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="form-group">
                <label for="email" class="form-label">Email</label>
                <input id="email" type="email" class="form-control rounded-5 @error('email') bd bd-danger @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                @error('email')
                    <small class="tx-danger tx-bold" role="alert">{{ $message }}</small>
                @enderror
            </div>

            <button class="btn btn-info btn-block rounded-5 tx-bold mb-2">Kirim Link Reset Password</button>
            <div>
                <a href="{{ route('register') }}">daftar</a>
                <span>atau </span>
                <a href="{{ route('login') }}">login</a>
            </div>
        </form>
    </div>
</div>
@endsection
