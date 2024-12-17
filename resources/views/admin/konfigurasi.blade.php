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
                <h6 class="mb-4">Konfigurasi</h6>
                <form method="POST" action="{{ route('admin.config.simpan') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="judul" class="form-label">Judul Website</label>
                        <input type="text" class="form-control" name="judul_website"
                            value="{{ $configs->judul_website }}" id="judul" required>
                    </div>
                    <div class="mb-3">
                        <label for="profil" class="form-label">Profil Website</label>
                        <textarea cols="30" class="form-control" name="profil_website" id="profil" required rows="3">{{ $configs->profil_website }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="instagram" class="form-label">Instagram</label>
                        <input type="text" class="form-control" name="instagram" id="instagram"
                            value="{{ $configs->instagram }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="facebook" class="form-label">Facebook</label>
                        <input type="text" class="form-control" name="facebook" id="facebook"
                            value="{{ $configs->facebook }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" class="form-control" name="email" id="email"
                            value="{{ $configs->email }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat</label>
                        <input type="text" class="form-control" name="alamat" value="{{ $configs->alamat }}"
                            id="alamat" required>
                    </div>
                    <div class="mb-3">
                        <label for="whatsapp" class="form-label">WhatsApp</label>
                        <input type="text" class="form-control" name="no_wa" id="whatsapp"
                            value="{{ $configs->no_wa }}" required>
                    </div>

                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
@endsection
