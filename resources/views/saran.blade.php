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
    <div id="disappear">
        @if (session()->has('message'))
            <div class="alert alert-success fade show" role="alert">
                {{ session()->get('message') }}
            </div>
        @elseif ($errors->any())
            <div class="alert alert-danger fade show" role="alert">
                @foreach ($errors->all() as $error)
                    {{ $error }}
                @endforeach
            </div>
        @endif
    </div>

    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Data Kategori</h4>
                <p class="card-description">
                    data saran dari user
                </p>
                <a href="{{ route('saran.delete.all') }}" class="btn btn-danger"
                    onclick="return confirm('Apakah anda yakin ingin menghapus semua saran?')">
                    <i class="icon-trash menu-icon"></i> &ensp;Hapus Semua
                </a>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama User</th>
                                <th>Isi Saran</th>
                                <th>Email</th>
                                <th>Tanggal</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($sarans as $saran)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $saran->nama }}</td>
                                    <td>{{ $saran->isi_saran }}</td>
                                    <td>{{ $saran->email }}</td>
                                    <td>{{ $saran->tanggal }}</td>
                                    <td>
                                        <a href="{{ route('saran.delete', ['id_saran' => $saran->id]) }}"
                                            class="btn btn-danger btn-sm"
                                            onclick="return confirm('Apakah anda yakin ingin menghapus?')">
                                            <i class="icon-trash menu-icon"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
