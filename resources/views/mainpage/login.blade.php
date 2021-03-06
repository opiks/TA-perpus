<!-- 
=============================================
   Nama : Muhamad Taufik Zamaludin
   NIM : 1120031026

   Deskripsi Program : App Perpustakaan 
============================================= 
-->

@extends('layouts.homepage')

@section('title')
    Login
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-6">
            <div class="login__form">
                <h3>Login</h3>
                <form action="#">
                    <div class="input__item">
                        <input type="text" placeholder="Email address">
                        <span class="icon_mail"></span>
                    </div>
                    <div class="input__item">
                        <input type="text" placeholder="Password">
                        <span class="icon_lock"></span>
                    </div>
                    <button type="submit" class="site-btn">Login Now</button>
                </form>
                <a href="#" class="forget_pass">Forgot Your Password?</a>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="login__register">
                <h3>Dont’t Have An Account?</h3>
                <a href="#" class="primary-btn">Register Now</a>
            </div>
        </div>
    </div>
@endsection

@section('javascript')
@endsection
