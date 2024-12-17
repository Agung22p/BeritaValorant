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
                <h4 class="card-title">Data Pengguna</h4>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#usermodal">
                    Tambah User
                </button>
                <div class="modal fade" id="usermodal" tabindex="-1" role="dialog" aria-labelledby="usermodalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="usermodalLabel">Tambah user</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form method="POST" action="{{ route('admin.user.update', $user->id) }}"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="nama" class="form-label">Nama</label>
                                        <input type="text" class="form-control" name="nama" id="nama"
                                            value="{{ $user->nama }}" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="username" class="form-label">Username</label>
                                        <input type="text" class="form-control" name="username" id="username"
                                            value="{{ $user->username }}" required>
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
                                    Username
                                </th>
                                <th>
                                    Nama
                                </th>
                                <th>
                                    Level
                                </th>
                                <th>
                                    Terakhir Login
                                </th>
                                <th>
                                    Aksi
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <td>{{ $user->username }}</td>
                                    <td>{{ $user->nama }}</td>
                                    <td>{{ $user->level }}</td>
                                    <td>{{ date('d-m-Y H:i:s', strtotime($user->recent_login)) }}</td>
                                    <td>
                                        <a href="{{ route('admin.user.delete', ['id_user' => $user->id]) }}"
                                            class="btn btn-danger btn-sm"
                                            onclick="return confirm('Apakah anda yakin ingin menghapus?')">
                                            <i class="icon-trash menu-icon"></i>
                                        </a>
                                        <button type="button" class="btn btn-warning btn-sm" data-toggle="modal"
                                            data-target="#editusermodal{{ $user->id }}">
                                            <i class="fas fa-pen-to-square"></i>
                                        </button>
                                        <div class="modal fade" id="editusermodal{{ $user->id }}" tabindex="-1"
                                            role="dialog" aria-labelledby="editusermodal{{ $user->id }}Label"
                                            aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="editusermodal{{ $user->id }}Label">
                                                            Edit user
                                                        </h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">×</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form method="POST"
                                                            action="{{ route('admin.user.update', $user->id) }}"
                                                            enctype="multipart/form-data">
                                                            @csrf
                                                            <div class="mb-3">
                                                                <label for="nama" class="form-label">Nama</label>
                                                                <input type="text" class="form-control" name="nama"
                                                                    id="nama" value="{{ $user->nama }}" required>
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="username" class="form-label">Username</label>
                                                                <input type="text" class="form-control" name="username"
                                                                    id="username" value="{{ $user->username }}"
                                                                    required>
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
