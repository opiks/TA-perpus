<!--
=============================================
   Nama : Muhamad Taufik Zamaludin
   NIM : 1120031026

   Deskripsi Program : App Perpustakaan
=============================================
-->

@extends('layouts.homepage')

@section('title')
    Homepage
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="trending__product">
                <div class="row">
                    <div class="col-lg-8 col-md-8 col-sm-8">
                        <div class="section-title">
                            <h4>Baru Ditambahkan</h4>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @foreach ($Books as $Book)
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="product__item">
                                <a href="{{ route('books.detail', $Book) }}">
                                    <div class="product__item__pic set-bg"
                                        data-setbg="{{ asset('storage/' . $Book->book_photo_path . $Book->book_photo) }}"
                                        style="background-image: url('{{ asset('storage/' . $Book->book_photo_path . $Book->book_photo) }}');">
                                    </div>
                                </a>
                                <div class="product__item__text">
                                    <ul>
                                        @foreach ($Book->bookCategories as $bookCategory)
                                            <li>{{ $bookCategory->category->name }}</li>
                                        @endforeach
                                    </ul>
                                    <h5><a href="{{ route('books.detail', $Book) }}">{{ $Book->name }}</a></h5>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection

@section('javascript')
@endsection
