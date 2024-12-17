@extends('home')

@push('judul')
    {{ $judul }}
@endpush

@push('crumb')
    <ul class="breadcrumb">
        <li><a href="{{ route('home') }}">Home</a></li>
        <li class="active">Galeri</li>
    </ul>
@endpush

@push('header')
    Galeri
@endpush

@section('content')
    <div class="main">
        <div class="container">
            <!-- BEGIN SIDEBAR & CONTENT -->
            <div class="row margin-bottom-40">
                <!-- BEGIN CONTENT -->
                <div class="col-md-12">
                    <div class="content-page">
                        <div class="row margin-bottom-40">
                            @foreach ($galeris as $galeri)
                                <div class="col-md-3 col-sm-4 gallery-item">
                                    <a data-rel="fancybox-button" title="{{ $galeri->judul }}"
                                        href="{{ asset('images/' . $galeri->foto) }}" class="fancybox-button">
                                        <img alt="{{ $galeri->judul }}" src="{{ asset('images/' . $galeri->foto) }}"
                                            class="img-responsive">
                                        <div class="zoomix"><i class="fa fa-search"></i></div>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <!-- END CONTENT -->
            </div>
        </div>
    </div>
@endsection
