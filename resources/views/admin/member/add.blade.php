@extends('layouts.adminlayout')

@section('title')
    Perpustakaan Admin | Tambah Member
@endsection

@section('content')
    <h1 class="page-header mb-3">
        Tambah Data Member
    </h1>
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    @if (session()->has('alert'))
                        <x-alert type="{{ session('alert') }}" message="{{ session('msg') }}" />
                    @endif
                    <form action="{{ route('admin.member.store') }}" method="post" enctype="multipart/form-data">
                        @method('POST')
                        @csrf
                        <div class="form-row row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">NIK</label>
                                <input type="text" class="form-control" name="nik" placeholder="Masukin NIK" required
                                    value="{{ old('nik') }}">
                                @error('nik')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">Nama</label>
                                <input type="text" class="form-control" name="name" placeholder="Masukin Nama"
                                    required value="{{ old('name') }}">
                                @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-row row mt-2">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">E-mail</label>
                                <input type="email" class="form-control" name="email" placeholder="Masukin Email"
                                    required value="{{ old('email') }}">
                                @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">No Telepon</label>
                                <input type="text" class="form-control" name="nomor_telepon" placeholder="Masukin Nama"
                                    required value="{{ old('nomor_telepon') }}">
                                @error('nomor_telepon')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-row row mt-2">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Tempat Lahir</label>
                                <input type="text" class="form-control" name="tempat_lahir"
                                    placeholder="Masukin Tempat Lahir" required value="{{ old('tempat_lahir') }}">
                                @error('tempat_lahir')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">Tanggal Lahir</label>
                                <input type="date" class="form-control" name="tanggal_lahir"
                                    placeholder="Masukin Tanggal Lahir" required value="{{ old('tanggal_lahir') }}">
                                @error('tanggal_lahir')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-row row mt-2">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Gol Darah</label>
                                <input type="text" class="form-control" name="gol_darah" placeholder="Masukin Gol Darah"
                                    required value="{{ old('gol_darah') }}">
                                @error('gol_darah')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">Jenis Kelamin</label>
                                <select class="form-control" name="jenis_kelamin">
                                    <option>Pilih Jenis Kelamin</option>
                                    <option value="Laki - Laki" @if (old('jenis_kelamin') == 'Laki - Laki') selected @endif>Laki -
                                        Laki
                                    </option>
                                    <option value="Perempuan" @if (old('jenis_kelamin') == 'Perempuan') selected @endif>Perempuan
                                    </option>
                                </select>
                                @error('jenis_kelamin')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-row row mt-2">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Agama</label>
                                <input type="text" class="form-control" name="agama" placeholder="Masukin Gol Darah"
                                    required value="{{ old('agama') }}">
                                @error('agama')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Foto Member</label>
                                <input type="file" class="form-control" name="member_photo_name"
                                    placeholder="Masukin Gol Darah" required>
                                @error('member_photo_name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Alamat</label>
                            <textarea class="form-control" name="address" rows="3"></textarea>
                        </div>
                        <hr>
                        <div class="text-end">
                            <a href="{{ route('admin.member.index') }}" class="btn btn-danger">Batal</a>
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
