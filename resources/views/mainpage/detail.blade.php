<!--
=============================================
   Nama : Muhamad Taufik Zamaludin
   NIM : 1120031026

   Nama : Muhamad Zulfiqor
   NIM : 1120031025

   Deskripsi Program : App Perpustakaan
=============================================
-->

@extends('layouts.homepage')

@section('title')
    Detail
@endsection

@section('content')
    <div class="container">
        <div class="anime__details__content">
            <div class="row">
                <div class="col-lg-3">
                    <div class="anime__details__pic set-bg"
                        data-setbg="{{ asset('storage/' . $Book->book_photo_path . $Book->book_photo) }}"
                        style="background-image: url('{{ asset('storage/' . $Book->book_photo_path . $Book->book_photo) }}');">
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="anime__details__text">
                        <div class="anime__details__title">
                            <h3>{{ $Book->name }}</h3>
                            <span>{{ $Book->penulis }}</span>
                        </div>
                        <p>{!! $Book->deskripsi !!}</p>
                        <div class="anime__details__widget">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <ul>
                                        <li><span>Jenis Buku:</span> {{ $Book->type->name }}</li>
                                        <li><span>Penerbit:</span> {{ $Book->penerbit }}</li>
                                        <li><span>Lokasi Buku:</span> {{ $Book->location->name }}</li>
                                        <li><span>Genre:</span>
                                            {{ $Book->bookCategories->implode('category.name', ', ') }}</li>
                                    </ul>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <ul>
                                        <li><span>Tanggal Rilis:</span> {{ $Book->tanggal_rilis->format('d M Y') }}</li>
                                        <li><span>Total Halaman:</span> {{ number_format($Book->total_page) }}</li>
                                        <li><span>Sisa Buku:</span> {{ number_format($Book->book_total_sisa) }}</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('javascript')
@endsection
