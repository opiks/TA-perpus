@extends('layouts.adminlayout')

@section('title')
    Perpustakaan Admin | Tambah Kategori Buku
@endsection

@section('content')
    <h1 class="page-header mb-3">
        Tambah Data Kategori Buku
    </h1>
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    @if (session()->has('alert'))
                        <x-alert type="{{ session('alert') }}" message="{{ session('msg') }}" />
                    @endif
                    <form action="{{ route('admin.peminjaman.store') }}" method="post">
                        @method('POST')
                        @csrf
                        <div class="form-group">
                            <label for="exampleFormControlInput1" class="mb-2">Buku</label>
                            <select class="form-control" id="book_id" name="book_id" required>
                                <option>Pilih Buku</option>
                                @foreach ($Books as $Book)
                                    <option value="{{ $Book->id }}" @if ($Book->id == old('book_id')) selected @endif>
                                        {{ $Book->name }}</option>
                                @endforeach
                            </select>
                            @error('book_id')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group mt-2">
                            <label for="exampleFormControlInput1" class="mb-2">Member</label>
                            <select class="form-control" id="member_id" name="member_id" required>
                                <option>Pilih Member</option>
                                @foreach ($Members as $Member)
                                    <option value="{{ $Member->id }}" @if ($Member->id == old('member_id')) selected @endif>
                                        {{ $Member->name }}</option>
                                @endforeach
                            </select>
                            @error('member_id')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <hr>
                        <div class="text-end">
                            <a href="{{ route('admin.kategori.index') }}" class="btn btn-danger">Batal</a>
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
    $(document).ready(function() {
        $('#book_id').select2();
        $('#member_id').select2();
    });
</script>
@endsection
