@extends('layouts.base_admin')
@push('header')
    {{ $data['judul_halaman'] }}
@endpush
@push('nama')
    {{ $user->nama }}
@endpush
@section('content')
    <h3>This is blank page</h3>
@endsection
