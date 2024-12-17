@extends('layouts.base_admin')
@push('header')
    {{ $data['judul_halaman'] }}
@endpush
@push('nama')
    {{ $user->nama }}
@endpush
@push('level')
    {{ $user->level }}
@endpush

@section('content')
    <div class="container-fluid pt-4 px-4">
        <div class="row vh-100 bg-secondary rounded align-items-center justify-content-center mx-0">
            <div class="col-md-6 text-center">
                <h3>This is blank page</h3>
            </div>
        </div>
    </div>
@endsection
