@extends('layouts.adminlayout')

@section('title')
    Perpustakaan Admin | Kategori Buku
@endsection

@section('content')
    <h1 class="page-header mb-3">
        Data Kategori Buku
    </h1>
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header">
                    <a href="{{ route('admin.kategori.add') }}" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah
                        Kategori Buku</a>
                </div>
                <div class="card-body">
                    @if (session()->has('alert'))
                        <x-alert type="{{ session('alert') }}" message="{{ session('msg') }}" />
                    @endif
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nama Kategori Buku</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($Categories as $Category)
                                    <tr>
                                        <th scope="row">{{ number_format($no++) }}</th>
                                        <td>{{ $Category->name }}</td>
                                        <td>
                                            <a href="{{ route('admin.kategori.edit', $Category) }}"
                                                class="btn btn-sm btn-primary">
                                                <i class="fa fa-edit"></i> Edit
                                            </a>
                                            <a href="{{ route('admin.kategori.destroy', $Category) }}" class="btn btn-sm btn-danger">
                                                <i class="fa fa-trash"></i>
                                                Hapus
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('javascript')
@endsection
