@extends('layouts.adminlayout')

@section('title')
    Perpustakaan Admin | Member
@endsection

@section('content')
    <h1 class="page-header mb-3">
        Data Member
    </h1>
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header">
                    <a href="{{ route('admin.member.add') }}" class="btn btn-primary">
                        <i class="fa fa-plus"></i> Tambah Member
                    </a>
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
                                    <th scope="col">NIK</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Alamat</th>
                                    <th scope="col">Jenis Kelamin</th>
                                    <th scope="col">Tanggal Dibuat</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($Members as $Member)
                                    <tr>
                                        <th scope="row">{{ number_format($no++) }}</th>
                                        <td>{{ $Member->nik }}</td>
                                        <td>{{ $Member->name }}</td>
                                        <td>{{ $Member->address }}</td>
                                        <td>{{ $Member->jenis_kelamin }}</td>
                                        <td>{{ $Member->created_at->format('d M Y') }}</td>
                                        <td>
                                            <a href="{{ route('admin.member.edit', $Member) }}"
                                                class="btn btn-sm btn-primary">
                                                <i class="fa fa-edit"></i> Edit
                                            </a>
                                            <button class="btn btn-sm btn-danger btndelete"
                                                data-delete="{{ route('admin.member.destroy', $Member) }}">
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
                        {{ $Members->links() }}
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
