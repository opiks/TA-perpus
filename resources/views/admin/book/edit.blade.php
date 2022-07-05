@extends('layouts.adminlayout')

@section('title')
    Perpustakaan Admin | Ubah Buku
@endsection

@section('content')
    <h1 class="page-header mb-3">
        Ubah Data Buku
    </h1>
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    @if (session()->has('alert'))
                        <x-alert type="{{ session('alert') }}" message="{{ session('msg') }}" />
                    @endif
                    <form action="{{ route('admin.buku.update', $Book) }}" method="post" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="form-row row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4" class="mb-2">Judul Buku</label>
                                <input type="text" class="form-control" name="name" placeholder="Masukin Judul Buku"
                                    required value="{{ $Book->name }}">
                                @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4" class="mb-2">Penerbit</label>
                                <input type="text" class="form-control" name="penerbit" placeholder="Masukin Penerbit"
                                    required value="{{ $Book->penerbit }}">
                                @error('penerbit')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-row row mt-2">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4" class="mb-2">Penulis</label>
                                <input type="text" class="form-control" name="penulis" placeholder="Masukin Penulis"
                                    required value="{{ $Book->penulis }}">
                                @error('penulis')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4" class="mb-2">Tanggal Rilis</label>
                                <input type="date" class="form-control" name="tanggal_rilis"
                                    placeholder="Masukin Tanggal Rilis" required
                                    value="{{ $Book->tanggal_rilis->format('Y-m-d') }}">
                                @error('tanggal_rilis')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-row row mt-2">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4" class="mb-2">Total Halaman</label>
                                <input type="number" class="form-control" name="total_page"
                                    placeholder="Masukin Total Halaman" required value="{{ $Book->total_page }}">
                                @error('total_page')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4" class="mb-2">Total Buku Serupa</label>
                                <input type="number" class="form-control" name="book_total"
                                    placeholder="Masukin Total Buku Serupa" required value="{{ $Book->book_total }}">
                                @error('book_total')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-row row mt-2">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4" class="mb-2">Tipe Buku</label>
                                <select class="form-control" id="type_id" name="type_id">
                                    <option>Pilih Tipe Buku</option>
                                    @foreach ($Types as $Type)
                                        <option value="{{ $Type->id }}"
                                            @if ($Type->id == $Book->type_id) selected @endif>
                                            {{ $Type->name }}</option>
                                    @endforeach
                                </select>
                                @error('type_id')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputEmail4" class="mb-2">Lokasi Buku</label>
                                <select class="form-control" id="location_id" name="location_id">
                                    <option>Pilih Lokasi Buku</option>
                                    @foreach ($Locations as $Location)
                                        <option value="{{ $Location->id }}"
                                            @if ($Location->id == $Book->location_id) selected @endif>
                                            {{ $Location->name }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('location_id')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-row row mt-2">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4" class="mb-2">Foto Buku</label>
                                <input type="file" class="form-control" name="book_photo"
                                    placeholder="Masukin Foto Buku">
                                @error('book_photo')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4" class="mb-2">Kategori Buku</label>
                                <select class="form-control" id="category_id" name="category_id[]" multiple="multiple">
                                    @foreach ($Categories as $Category)
                                        <option value="{{ $Category->id }}"
                                            @if (in_array($Category->id, $BookCategories)) selected @endif>{{ $Category->name }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('category_id')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group mt-2">
                            <label for="exampleFormControlTextarea1" class="mb-2">Deskripsi</label>
                            <textarea class="form-control" id="editor1" name="deskripsi" rows="3">{{ $Book->deskripsi }}</textarea>
                        </div>
                        <hr>
                        <div class="text-end">
                            <a href="{{ route('admin.buku.index') }}" class="btn btn-danger">Batal</a>
                            <button class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('javascript')
    <script>
        CKEDITOR.replace('editor1');
    </script>
    <script>
        $(document).ready(function() {
            $('#type_id').select2();
            $('#location_id').select2();
            $('#category_id').select2({
                placeholder: "Pilih Kategori Buku",
                allowClear: true
            });
        });
    </script>
@endsection
