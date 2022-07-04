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
                                            <button class="btn btn-sm btn-danger btndelete"
                                                data-delete="{{ route('admin.kategori.destroy', $Category) }}">
                                                <i class="fa fa-trash"></i>
                                                Hapus
                                            </button>
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
    <script>
        $(".btndelete").click(function() {
            var linkdelete = $(this).data('delete');
            const swalWithBootstrapButtons = Swal.mixin({
                customClass: {
                    confirmButton: 'btn btn-danger',
                    cancelButton: 'btn btn-success mr-1'
                },
                buttonsStyling: {
                    cancelButton: 'margin-right: 1rem;'
                }
            })

            swalWithBootstrapButtons.fire({
                title: 'Apakah Yakin Ingin ?',
                text: "Ingin Menghapus Data Tersebut",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Hapus',
                cancelButtonText: 'Batal',
                reverseButtons: true
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = linkdelete;
                }
            })
        });
    </script>
@endsection
