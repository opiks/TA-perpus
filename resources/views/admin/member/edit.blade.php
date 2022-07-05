@extends('layouts.adminlayout')

@section('title')
    Perpustakaan Admin | Ubah Member
@endsection

@section('content')
    <h1 Ubah="page-header mb-3">
        Ubah Data Member
    </h1>
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    @if (session()->has('alert'))
                        <x-alert type="{{ session('alert') }}" message="{{ session('msg') }}" />
                    @endif
                    <form action="{{ route('admin.member.update', $Member) }}" method="post" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="form-row row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4" class="mb-2">NIK</label>
                                <input type="text" class="form-control" name="nik" placeholder="Masukin NIK" required
                                    value="{{ $Member->nik }}">
                                @error('nik')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4" class="mb-2">Nama</label>
                                <input type="text" class="form-control" name="name" placeholder="Masukin Nama"
                                    required value="{{ $Member->name }}">
                                @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-row row mt-2">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4" class="mb-2">E-mail</label>
                                <input type="email" class="form-control" name="email" placeholder="Masukin Email"
                                    required value="{{ $Member->email }}">
                                @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4" class="mb-2">No Telepon</label>
                                <input type="text" class="form-control" name="nomor_telepon" placeholder="Masukin Nama"
                                    required value="{{ $Member->nomor_telepon }}">
                                @error('nomor_telepon')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-row row mt-2">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4" class="mb-2">Tempat Lahir</label>
                                <input type="text" class="form-control" name="tempat_lahir"
                                    placeholder="Masukin Tempat Lahir" required value="{{ $Member->tempat_lahir }}">
                                @error('tempat_lahir')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4" class="mb-2">Tanggal Lahir</label>
                                <input type="date" class="form-control" name="tanggal_lahir"
                                    placeholder="Masukin Tanggal Lahir" required value="{{ $Member->tanggal_lahir }}">
                                @error('tanggal_lahir')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-row row mt-2">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4" class="mb-2">Gol Darah</label>
                                <input type="text" class="form-control" name="gol_darah" placeholder="Masukin Gol Darah"
                                    required value="{{ $Member->gol_darah }}">
                                @error('gol_darah')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4" class="mb-2">Jenis Kelamin</label>
                                <select class="form-control" name="jenis_kelamin">
                                    <option>Pilih Jenis Kelamin</option>
                                    <option value="Laki - Laki" @if ($Member->jenis_kelamin == 'Laki - Laki') selected @endif>Laki -
                                        Laki
                                    </option>
                                    <option value="Perempuan" @if ($Member->jenis_kelamin == 'Perempuan') selected @endif>Perempuan
                                    </option>
                                </select>
                                @error('jenis_kelamin')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-row row mt-2">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4" class="mb-2">Agama</label>
                                <input type="text" class="form-control" name="agama" placeholder="Masukin Agama"
                                    required value="{{ $Member->agama }}">
                                @error('agama')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputEmail4" class="mb-2">Foto Member</label>
                                <input type="file" class="form-control" name="member_photo_name">
                                @error('member_photo_name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group mt-2">
                            <label for="exampleFormControlTextarea1" class="mb-2">Alamat</label>
                            <textarea class="form-control" name="address" rows="3">{{ $Member->address }}</textarea>
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
