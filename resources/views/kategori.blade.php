@extends('layouts.base_admin')


@push('header')
    {{ $data['judul_halaman'] }}
@endpush
@push('nama')
    {{ $user->nama }}
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
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#kategorimodal">
                    Tambah Kategori
                </button>
                <div class="modal fade" id="kategorimodal" tabindex="-1" role="dialog"
                    aria-labelledby="kategorimodalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="kategorimodalLabel">Tambah Kategori</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form method="POST" action="{{ route('kategori.simpan') }}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="nama_kategori" class="form-label">Nama Kategori</label>
                                        <input type="text" class="form-control" name="nama_kategori"
                                            placeholder="Nama Kategori" id="nama_kategori" required>
                                    </div>
                                    {{-- <button type="submit" class="btn btn-primary">Simpan</button> --}}
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                                </form>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <p class="card-description">
                    data kategori konten
                </p> --}}
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>
                                    No
                                </th>
                                <th>
                                    Nama Kategori
                                </th>
                                <th>
                                    Aksi
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($kategories as $kategori)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $kategori->nama_kategori }}</td>
                                    <td>
                                        <a href="{{ route('kategori.delete', ['id_kategori' => $kategori->id]) }}"
                                            class="btn btn-danger btn-sm"
                                            onclick="return confirm('Apakah anda yakin ingin menghapus?')">
                                            <i class="icon-trash menu-icon"></i>
                                        </a>
                                        <button type="button" class="btn btn-warning btn-sm" data-toggle="modal"
                                            data-target="#editkategorimodal{{ $kategori->id }}">
                                            <i class="fas fa-pen-to-square"></i>
                                        </button>
                                        <div class="modal fade" id="editkategorimodal{{ $kategori->id }}" tabindex="-1"
                                            role="dialog" aria-labelledby="editkategorimodal{{ $kategori->id }}Label"
                                            aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title"
                                                            id="editkategorimodal{{ $kategori->id }}Label">Edit Kategori
                                                        </h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">×</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form method="POST"
                                                            action="{{ route('kategori.update', $kategori->id) }}"
                                                            enctype="multipart/form-data">
                                                            @csrf
                                                            <div class="mb-3">
                                                                <label for="nama_kategori" class="form-label">Nama
                                                                    Kategori</label>
                                                                <input type="text" class="form-control"
                                                                    name="nama_kategori" id="nama_kategori"
                                                                    value="{{ $kategori->nama_kategori }}" required>
                                                            </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                                        </form>
                                                        <button type="button" class="btn btn-secondary"
                                                            data-dismiss="modal">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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
