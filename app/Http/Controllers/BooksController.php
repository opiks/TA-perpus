<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BooksController extends Controller
{
    public function index()
    {
        return view('mainpage.index');
    }

    public function category()
    {
        return view('mainpage.category');
    }

    public function search()
    {
        return view('mainpage.search');
    }
}
