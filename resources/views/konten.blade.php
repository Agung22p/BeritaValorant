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
                <h4 class="card-title">Data Konten</h4>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#kontenmodal">
                    Tambah konten
                </button>
                <div class="modal fade" id="kontenmodal" tabindex="-1" role="dialog" aria-labelledby="kontenmodalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="kontenmodalLabel">Tambah konten</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form method="POST" action="{{ route('konten.simpan') }}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label for="judul" class="form-label">Judul</label>
                                        <input type="text" class="form-control" name="judul" placeholder="Judul"
                                            id="judul" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="kategori" class="form-label">Kategori</label>
                                        <select class="form-control" name="kategori" id="kategori" required>
                                            <option disabled selected value=" ">Silahkan Pilih Kategori</option>
                                            @foreach ($kategories as $kategori)
                                                <option value="{{ $kategori->id }}">{{ $kategori->nama_kategori }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="keterangan" class="form-label">Keterangan</label>
                                        <textarea type="text" class="form-control" name="keterangan" placeholder="Keterangan" id="keterangan" required
                                            cols="30" rows="10"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Upload Foto (1:3)</label>
                                        <input type="file" name="foto" class="file-upload-default">
                                        <div class="input-group col-xs-12">
                                            <input type="text" class="form-control file-upload-info" disabled
                                                placeholder="Upload Foto">
                                            <span class="input-group-append">
                                                <button class="file-upload-browse btn btn-primary"
                                                    type="button">Upload</button>
                                            </span>
                                        </div>
                                    </div>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                                </form>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>
                                    No
                                </th>
                                <th>
                                    Judul
                                </th>
                                <th>
                                    Kategori Konten
                                </th>
                                <th>
                                    Tanggal
                                </th>
                                <th>
                                    Kreator
                                </th>
                                <th>
                                    Foto
                                </th>
                                <th>
                                    Aksi
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($kontens as $konten)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $konten->judul }}</td>
                                    <td>{{ $konten->nama_kategori }}</td>
                                    <td>{{ $konten->tanggal }}</td>
                                    <td>{{ $konten->username }}</td>
                                    <td>
                                        <a href="{{ asset('images/' . $konten->foto) }}" target="_blank">
                                            <i class="fas fa-search"></i> Lihat Foto
                                        </a>
                                    </td>
                                    <td>
                                        <a href="{{ route('konten.delete', ['id_konten' => $konten->foto]) }}"
                                            class="btn btn-danger btn-sm"
                                            onclick="return confirm('Apakah anda yakin ingin menghapus?')">
                                            <i class="icon-trash menu-icon"></i>
                                        </a>
                                        <button type="button" class="btn btn-warning btn-sm" data-toggle="modal"
                                            data-target="#editkontenmodal{{ $konten->id }}">
                                            <i class="fas fa-pen-to-square"></i>
                                        </button>
                                        <div class="modal fade" id="editkontenmodal{{ $konten->id }}" tabindex="-1"
                                            role="dialog" aria-labelledby="editkontenmodal{{ $konten->id }}Label"
                                            aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title"
                                                            id="editkontenmodal{{ $konten->id }}Label">Edit konten
                                                        </h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">×</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form method="POST"
                                                            action="{{ route('konten.update', $kategori->id) }}"
                                                            enctype="multipart/form-data">
                                                            @csrf
                                                            <input type="hidden" name="id"
                                                                value="{{ $konten->id }}">
                                                            <div class="form-group">
                                                                <label for="judul" class="form-label">Judul</label>
                                                                <input type="text" class="form-control" name="judul"
                                                                    value="{{ $konten->judul }}" id="judul" required>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="kategori" class="form-label">Kategori</label>
                                                                <select class="form-control" name="kategori"
                                                                    id="kategori" required>
                                                                    <option disabled selected value=" ">Silahkan Pilih
                                                                        Kategori</option>
                                                                    @foreach ($kategories as $kategori)
                                                                        <option value="{{ $kategori->id }}"
                                                                            {{ $kategori->id == $konten->id_kategori ? 'selected' : '' }}>
                                                                            {{ $kategori->nama_kategori }}
                                                                        </option>
                                                                    @endforeach
                                                                </select>
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="keterangan"
                                                                    class="form-label">Keterangan</label>
                                                                <textarea type="text" class="form-control" name="keterangan" placeholder="Keterangan" id="keterangan" required
                                                                    cols="30" rows="10">{{ $konten->keterangan }}</textarea>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Upload Foto (1:3)</label>
                                                                <input type="file" name="foto"
                                                                    class="file-upload-default">
                                                                <div class="input-group col-xs-12">
                                                                    <input type="text"
                                                                        class="form-control file-upload-info" disabled
                                                                        placeholder="Upload Foto"
                                                                        value="{{ $konten->foto }}">
                                                                    <span class="input-group-append">
                                                                        <button class="file-upload-browse btn btn-primary"
                                                                            type="button">Upload</button>
                                                                    </span>
                                                                </div>
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
