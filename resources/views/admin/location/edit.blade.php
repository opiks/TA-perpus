@extends('layouts.adminlayout')

@section('title')
    Perpustakaan Admin | Ubah Lokasi Buku
@endsection

@section('content')
    <h1 class="page-header mb-3">
        Ubah Data Lokasi Buku
    </h1>
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    @if (session()->has('alert'))
                        <x-alert type="{{ session('alert') }}" message="{{ session('msg') }}" />
                    @endif
                    <form action="{{ route('admin.lokasi.update', $Location) }}" method="post">
                        @method('PUT')
                        @csrf
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Lokasi Buku</label>
                            <input type="text" class="form-control" name="name" value="{{ $Location->name }}"
                                placeholder="Masukan Lokasi Buku">
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <hr>
                        <div class="text-end">
                            <a href="{{ route('admin.lokasi.index') }}" class="btn btn-danger">Batal</a>
                            <button class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('javascript')
@endsection
