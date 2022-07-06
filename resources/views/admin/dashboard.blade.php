@extends('layouts.adminlayout')
<!--
=============================================
   Nama : Muhamad Taufik Zamaludin
   NIM : 1120031026

   Nama : Muhamad Zulfiqor
   NIM : 1120031025

   Deskripsi Program : App Perpustakaan
=============================================
-->

@section('title')
    Perpustakaan Admin
@endsection

@section('content')
    <h1 class="page-header mb-3">
        Dashboard
    </h1>
    <div class="row">

        <!-- BEGIN col-6 -->
        <div class="col-xl-12">
            <!-- BEGIN row -->
            <div class="row">
                <div class="col-md-4">
                    <div class="card mb-3 overflow-hidden fs-13px border-0 bg-gradient-custom-orange">
                        <div class="card-body position-relative">
                            <h5 class="text-white-transparent-8 mb-3 fs-16px">Total Member</h5>
                            <h3 class="text-white mt-n1">10</h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-3 overflow-hidden fs-13px border-0 bg-gradient-custom-teal">
                        <div class="card-body position-relative">
                            <h5 class="text-white-transparent-8 mb-3 fs-16px">Total Buku</h5>
                            <h3 class="text-white mt-n1">1000</h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-3 overflow-hidden fs-13px border-0 bg-gradient-custom-pink">
                        <div class="card-body position-relative">
                            <h5 class="text-white-transparent-8 mb-3 fs-16px">Buku Dipinjam</h5>
                            <h3 class="text-white mt-n1">10</h3>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END row -->
        </div>
        <!-- END col-6 -->
    </div>
    <!-- END row -->
@endsection

@section('javascript')
@endsection
