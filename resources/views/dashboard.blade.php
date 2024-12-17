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
    Selamat Datang <br>
    <a href="{{ route('auth') }}">Login</a>
@endsection
