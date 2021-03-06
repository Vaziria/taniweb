@extends('layouts.dashboard')

@section('content')
<div class="container py-5">
    <h4 class="tx-bold mb-4">Notifikasi</h4>
    <div class="bd bd-gray-200 rounded-5 mb-3" aria-labelledby="notification">
        @for($i = 1; $i <= 10; $i++)
            <a href="{{ route('dashboard.notification-detail', ['id' => 'test']) }}" class="dropdown-item p-3 bd-b tx-dark d-block" style="white-space: normal;">
                <h6 class="tx-bold tx-dark">Update System Website 3 Maret 2021</h6>
                <p class="tx-13 tx-gray-600 mb-0">Mohon maaf atas ketidaknyamanannya, kami akan segera kembali.</p>
                <small class="tx-gray-600 tx-bold">2 maret 2021</small>
            </a>
        @endfor
    </div>

    <ul class="pagination pagination-info justify-content-center">
        <li class="page-item"><a class="page-link" href="#"><i class="fas fa-chevron-left"></i></a></li>
        <li class="page-item active"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item"><a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a></li>
    </ul>
</div>

@push('styles')
    <style type="text/css" scoped>
        .page-item {
            margin: 0 10px;
        }
        .page-item a {
            border-radius: 5px !important;
        }
    </style>
@endpush
@endsection
