@extends('home')

@push('judul')
    {{ $judul }}
@endpush

@push('crumb')
    <ul class="breadcrumb">
        <li><a href="{{ route('home') }}">Home</a></li>
        <li><a href="">Detail</a></li>
        <li class="active">{{ $kontens->judul }}</li>
    </ul>
@endpush

@push('header')
    Detail {{ $kontens->judul }}
@endpush

@section('content')
    <div class="col-md-9 col-sm-9 blog-item">
        <div class="blog-item-img">
            <div class="front-carousel">
                <div id="myCarousel" class="carousel">
                    <img src="{{ asset('images/' . $kontens->foto) }}" alt="{{ $kontens->judul }}" width="750px">
                </div>
            </div>
        </div>
        <h2><a href="javascript:;">{{ $kontens->judul }}</a></h2>
        <p>{{ $kontens->keterangan }}</p>
        <ul class="blog-info">
            <li><i class="fa fa-user"></i> {{ $kontens->username }}</li>
            <li><i class="fa fa-calendar"></i> {{ $kontens->tanggal }}</li>
            <li><i class="fa fa-tags"></i> {{ $kontens->nama_kategori }}</li>
        </ul>




    </div>
@endsection
