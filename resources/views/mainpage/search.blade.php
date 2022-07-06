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
    Cari Buku
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="trending__product">
                <div class="row">
                    <div class="col-lg-8 col-md-8 col-sm-8">
                        <div class="section-title">
                            <h4>Cari Buku</h4>
                        </div>
                    </div>
                </div>
                <form action="#" method="GET">
                    @csrf
                    <div class="row">
                        <div class="form-group col-md-4">
                            <label for="exampleInputEmail1" style="color: white;">Judul Buku</label><br>
                            <input type="text" name="judul_buku" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="Masukan Judul Buku"
                                value="{{ request()->judul_buku }}">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="exampleInputEmail2" style="color: white;">Tipe Buku</label><br>
                            <select class="form-control" id="typebuku" style="width: 100%" name="tipe_buku">
                                <option value="">Pilih Tipe Buku</option>
                                @foreach ($Types as $Type)
                                    <option value="{{ $Type->id }}" @if (request()->tipe_buku == $Type->id) selected @endif>
                                        {{ $Type->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-md-2">
                            <label for="exampleInputEmail2" style="color: white;">Genre Buku</label><br>
                            <select class="form-control" id="kategoribuku" style="width: 100%" name="genre_buku">
                                <option value="">Pilih Kategori Buku</option>
                                @foreach ($Categories as $Category)
                                    <option value="{{ $Category->id }}" @if (request()->genre_buku == $Category->id) selected @endif>
                                        {{ $Category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-md-2 d-flex justify-content-center align-items-center mt-4">
                            <button type="submit" class="btn btn-primary float-right mt-2">Cari Buku</button>
                        </div>

                    </div>
                </form>
            </div>
            @if (request()->judul_buku != '' || request()->tipe_buku != '' || request()->genre_buku != '')
                <div class="trending__product">
                    <div class="row">
                        <div class="col-lg-8 col-md-8 col-sm-8">
                            <div class="section-title">
                                <h4>Hasil Pencarian</h4>
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
            @endif
        </div>
    </div>
@endsection

@section('javascript')
    <script>
        $(document).ready(function() {
            $('#typebuku').select2();
            $('#kategoribuku').select2();
        });
    </script>
@endsection
