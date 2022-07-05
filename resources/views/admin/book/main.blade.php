@extends('layouts.adminlayout')

@section('title')
    Perpustakaan Admin | Buku
@endsection

@section('content')
    <h1 class="page-header mb-3">
        Data Buku
    </h1>
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header">
                    <a href="{{ route('admin.buku.add') }}" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah
                        Buku</a>
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
                                    <th scope="col">Nama Buku</th>
                                    <th scope="col">Penerbit</th>
                                    <th scope="col">Kategori Buku</th>
                                    <th scope="col">Total Buku Serupa</th>
                                    <th scope="col">Sisa Buku Serupa</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($Books as $Book)
                                    <tr>
                                        <th scope="row">{{ number_format($no++) }}</th>
                                        <td>{{ $Book->name }}</td>
                                        <td>{{ $Book->penerbit }}</td>
                                        <td>
                                            <ul>
                                                @foreach ($Book->bookCategories as $bookCategory)
                                                    <li>{{ $bookCategory->category->name }}</li>
                                                @endforeach
                                            </ul>
                                        </td>
                                        <td>
                                            {{ number_format($Book->book_total) }}
                                        </td>
                                        <td>
                                            {{ number_format($Book->book_total_sisa) }}
                                        </td>
                                        <td>
                                            <a href="{{ route('admin.buku.edit', $Book) }}"
                                                class="btn btn-sm btn-primary">
                                                <i class="fa fa-edit"></i> Edit
                                            </a>
                                            <button class="btn btn-sm btn-danger btndelete"
                                                data-delete="{{ route('admin.buku.destroy', $Book) }}">
                                                <i class="fa fa-trash"></i>
                                                Hapus
                                            </button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div style="display: flex;justify-content: center;">
                        {{ $Books->links() }}
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
