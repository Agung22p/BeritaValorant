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


    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Tambah Galeri</h4>
                <p class="card-description">
                    Tambah data Galeri
                </p>
                <form method="POST" action="{{ route('admin.galeri.simpan') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="judul">Judul</label>
                        <input type="text" name="judul" class="form-control" id="judul" placeholder="Judul">
                    </div>
                    <div class="form-group">
                        <label>Upload Foto (1:3)</label>
                        <input type="file" name="foto" class="file-upload-default">
                        <div class="input-group col-xs-12">
                            <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Foto">
                            <span class="input-group-append">
                                <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                            </span>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary me-2">Submit</button>
                </form>
            </div>
        </div>
    </div>

    <div class="card-columns">
        @foreach ($galeris as $galeri)
            <div class="card">
                <img class="card-img-top" src="{{ asset('images/' . $galeri->foto) }}" alt="Card image cap">
                <div class="card-body">
                    <h4 class="card-title mt-3">{{ $galeri->judul }}</h4>
                    <a href="{{ route('admin.galeri.delete', ['id_galeri' => $galeri->foto]) }}" class="btn btn-danger mt-3"
                        onclick="return confirm('Apakah anda yakin ingin menghapus?')"><i
                            class="icon-trash menu-icon"></i>&ensp;Hapus</a>
                </div>
            </div>
        @endforeach
    </div>


@endsection
