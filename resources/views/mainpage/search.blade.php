@extends('layouts.homepage')

@section('title')
    Cari Buku
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="trending__product">
                <div class="row">
                    <div class="col-lg-8 col-md-8 col-sm-8">
                        <div class="section-title">
                            <h4>Cari Buku</h4>
                        </div>
                    </div>
                </div>
                <form action="#" method="post">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="exampleInputEmail1" style="color: white;">Judul Buku</label><br>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                                placeholder="Masukan Judul Buku">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="exampleInputEmail2" style="color: white;">Tipe Buku</label><br>
                            <select class="form-control" id="exampleInputEmail2" style="width: 100%">
                                <option>Pilih Tipe Buku</option>
                                <option>Novel</option>
                                <option>Komik / Manga</option>
                                <option>Enslikopedia</option>
                            </select>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="exampleInputEmail2" style="color: white;">Kategori Buki</label><br>
                            <select class="form-control" id="exampleInputEmail2" style="width: 100%">
                                <option>Pilih Kategori Buku</option>
                                <option>Kategori 1</option>
                                <option>Kategori 2</option>
                            </select>
                        </div>
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary float-right">Cari Buku</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('javascript')
@endsection
