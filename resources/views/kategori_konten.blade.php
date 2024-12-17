@extends('home')

@push('judul')
    {{ $judul }}
@endpush

@push('header')
    Kategori {{ $kategori->nama_kategori }}
@endpush

@section('content')
    <!-- BEGIN LEFT SIDEBAR -->
    <div class="col-md-9 col-sm-9 blog-posts">
        @if ($kontens->count() != 0)
            @foreach ($kontens as $konten)
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <img class="img-responsive" alt="" src="{{ asset('images/' . $konten->foto) }}">
                    </div>
                    <div class="col-md-8 col-sm-8">
                        <h2><a href="{{ route('home.detail', $konten->slug) }}">{{ $konten->judul }}</a>
                        </h2>
                        <ul class="blog-info">
                            <li><i class="fa fa-calendar"></i> {{ $konten->tanggal }}</li>
                            <li><i class="fa fa-user"></i> {{ $konten->username }}</li>
                            <li><i class="fa fa-tags"></i> {{ $konten->nama_kategori }}
                            </li>
                        </ul>
                        <p>{{ $konten->keterangan }}</p>
                        <a href="{{ route('home.detail', $konten->slug) }}" class="more">Read
                            more <i class="icon-angle-right"></i></a>
                    </div>
                </div>
                <hr class="blog-post-sep">
            @endforeach

            <ul class="pagination">
                <li><a href="javascript:;">Prev</a></li>
                <li><a href="javascript:;">1</a></li>
                <li><a href="javascript:;">2</a></li>
                <li class="active"><a href="javascript:;">3</a></li>
                <li><a href="javascript:;">4</a></li>
                <li><a href="javascript:;">5</a></li>
                <li><a href="javascript:;">Next</a></li>
            </ul>
        @else
            Konten Tidak Tersedia
        @endif
    </div>
    <!-- END LEFT SIDEBAR -->
@endsection
