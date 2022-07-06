@extends('layouts.adminlayout')

@section('title')
    Perpustakaan Admin | Peminjaman
@endsection

@section('content')
    <h1 class="page-header mb-3">
        Data Peminjaman
    </h1>
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header">
                    <a href="{{ route('admin.peminjaman.add') }}" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah
                        Peminjaman</a>
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
                                    <th scope="col">Judul Buku</th>
                                    <th scope="col">Nama Peminjam</th>
                                    <th scope="col">Tanggal Pinjam</th>
                                    <th scope="col">Tanggal Pengembalian</th>
                                    <th scope="col">Status Peminjaman</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($Borrowers as $Borrower)
                                    <tr>
                                        <td>{{ number_format($no) }}</td>
                                        <td>{{ $Borrower->book->name }}</td>
                                        <td>{{ $Borrower->member->name }}</td>
                                        <td>{{ $Borrower->created_at->format('d M Y') }}</td>
                                        <td>
                                            @if ($Borrower->tanggal_pengembalian != '')
                                                {{ $Borrower->tanggal_pengembalian->format('d M Y') }}
                                            @else
                                                -
                                            @endif
                                        </td>
                                        <td>{{ $Borrower->status_borrower }}</td>
                                        <td>
                                            @if ($Borrower->status_borrower == 'Masih Dipinjam')
                                                <button class="btn btn-sm btn-primary btnkembali"
                                                    data-delete="{{ route('admin.peminjaman.pengembalian', $Borrower) }}">
                                                    <i class="fa fa-check"></i>
                                                    Pengembalian
                                                </button>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div style="display: flex;justify-content: center;">
                        {{ $Borrowers->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('javascript')
    <script>
        $(".btnkembali").click(function() {
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
                text: "Buku Sudah di check dan tidak ada kerusakan",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Sudah Confirm Pengembalian',
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
