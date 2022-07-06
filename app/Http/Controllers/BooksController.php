<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Category;
use App\Models\Type;

class BooksController extends Controller
{
    public function index()
    {
        $Books = Book::orderBy('id', 'DESC')->paginate(20);
        return view('mainpage.index', compact('Books'));
    }

    public function detail(Book $Book)
    {
        return view('mainpage.detail', compact('Book'));
    }

    public function category()
    {
        $Categories = Category::has('bookCategory')
            ->with(['bookCategory' => function ($query) {
                $query->orderBy('id', 'DESC');
                $query->limit(4);
            }])
            ->orderBy('name', 'ASC')
            ->paginate(20);

        return view('mainpage.category', compact('Categories'));
    }

    public function categoryDetail(Category $Category)
    {
        $Category->with(['bookCategory' => function ($query) {
            $query->orderBy('id', 'DESC');
            $query->paginate(20);
        }]);
        return view('mainpage.categoryDetail', compact('Category'));
    }

    public function search(Request $request)
    {
        $Categories = Category::all();
        $Types = Type::all();

        $Books = [];
        if ($request->judul_buku != '' || $request->tipe_buku != '' || $request->genre_buku != '') {
            $judulbuku = $request->judul_buku;
            $tipebuku = $request->tipe_buku;
            $genrebuku = $request->genre_buku;

            $Books = Book::when($judulbuku, function ($query, $judulbuku) {
                $query->where('name', 'like', '%' . $judulbuku . '%');
            })->when(
                $tipebuku,
                function ($query, $tipebuku) {
                    $query->where('type_id', $tipebuku);
                }
            )->when($genrebuku, function ($query, $genrebuku) {
                $query->whereHas('bookCategories', function ($q) use ($genrebuku) {
                    $q->where('category_id', $genrebuku);
                });
            })->paginate(20);
            // dd($Books);
        }
        return view('mainpage.search', compact('Categories', 'Types', 'Books'));
    }
}
