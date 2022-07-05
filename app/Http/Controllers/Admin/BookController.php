<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Book;
use App\Models\BookCategory;
use App\Models\Category;
use App\Models\Location;
use App\Models\Type;

class BookController extends Controller
{
    public function index(Request $request)
    {
        $Books = Book::paginate(20);
        $no = 1;
        return view('admin.book.main', compact('Books', 'no'));
    }

    public function add()
    {
        $Categories = Category::all();
        $Locations = Location::all();
        $Types = Type::all();

        return view('admin.book.add', compact('Categories', 'Locations', 'Types'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'penerbit' => 'required',
            'penulis' => 'required',
            'tanggal_rilis' => 'required',
            'total_page' => 'required',
            'book_total' => 'required',
            'type_id' => 'required',
            'location_id' => 'required',
            'deskripsi' => 'required',
            'book_photo' => 'mimes:jpeg,bmp,png,gif,svg,pdf|nullable',
            "category_id"    => "required|array",
            "category_id.*"  => "required|string|distinct",
        ], [
            'required' => 'Field :attribute tidak boleh kosong',
            'mimes' => 'Field :attribute harus berformat: file jpeg, bmp, png, gif, svg, pdf',
        ]);

        $path_foto = '';
        $name_foto = '';
        if ($request->hasFile('book_photo')) {
            $path_foto = 'book/foto/';
            $name_foto = 'Foto (' . strtotime('now') . ') ' . date('d-m-Y') . ' ' . $request->file('book_photo')->getClientOriginalName();
            Storage::disk('public')->put($path_foto . $name_foto, file_get_contents($request->file('book_photo')));
        }

        $Book = new Book();
        $Book->location_id = $request->location_id;
        $Book->type_id = $request->type_id;
        $Book->name = $request->name;
        $Book->deskripsi = $request->deskripsi;
        $Book->tanggal_rilis = $request->tanggal_rilis;
        $Book->total_page = $request->total_page;
        $Book->penerbit = $request->penerbit;
        $Book->penulis = $request->penulis;
        $Book->book_photo = $name_foto;
        $Book->book_photo_path = $path_foto;
        $Book->book_total = $request->book_total;
        $Book->book_total_sisa = $request->book_total;
        $Book->save();

        if ($request->category_id) {
            for ($i = 0; $i < count($request->category_id); $i++) {
                $BookCategory = new BookCategory();
                $BookCategory->book_id = $Book->id;
                $BookCategory->category_id = $request->category_id[$i];
                $BookCategory->save();
            }
        }

        return redirect()->route('admin.buku.index')->with([
            'alert' => 'success',
            'msg' => 'Data berhasil ditambahkan'
        ]);
    }

    public function edit(Book $Book)
    {

        $Categories = Category::all();
        $Locations = Location::all();
        $Types = Type::all();
        $BookCategories = $Book->bookCategories->pluck('category_id')->toArray();
        return view('admin.book.edit', compact('Book', 'BookCategories', 'Categories', 'Locations', 'Types'));
    }

    public function update(Book $Book, Request $request)
    {
        $request->validate([
            'name' => 'required',
            'penerbit' => 'required',
            'penulis' => 'required',
            'tanggal_rilis' => 'required',
            'total_page' => 'required',
            'book_total' => 'required',
            'type_id' => 'required',
            'location_id' => 'required',
            'deskripsi' => 'required',
            'book_photo' => 'mimes:jpeg,bmp,png,gif,svg,pdf|nullable',
            "category_id"    => "required|array",
            "category_id.*"  => "required|string|distinct",
        ], [
            'required' => 'Field :attribute tidak boleh kosong',
            'mimes' => 'Field :attribute harus berformat: file jpeg, bmp, png, gif, svg, pdf',
        ]);

        $path_foto =  $Book->book_photo_path;
        $name_foto =  $Book->book_photo;
        if ($request->hasFile('book_photo')) {
            $path_foto = 'book/foto/';
            $name_foto = 'Foto (' . strtotime('now') . ') ' . date('d-m-Y') . ' ' . $request->file('book_photo')->getClientOriginalName();
            Storage::disk('public')->put($path_foto . $name_foto, file_get_contents($request->file('book_photo')));
        }

        $selisih =  $request->book_total - $Book->book_total;
        
        $Book->location_id = $request->location_id;
        $Book->type_id = $request->type_id;
        $Book->name = $request->name;
        $Book->deskripsi = $request->deskripsi;
        $Book->tanggal_rilis = $request->tanggal_rilis;
        $Book->total_page = $request->total_page;
        $Book->penerbit = $request->penerbit;
        $Book->penulis = $request->penulis;
        $Book->book_photo = $name_foto;
        $Book->book_photo_path = $path_foto;
        $Book->book_total = $request->book_total;
        $Book->book_total_sisa = $Book->book_total_sisa + $selisih;
        $Book->save();

        if ($request->category_id) {
            BookCategory::where('book_id', $Book->id)->delete();

            for ($i = 0; $i < count($request->category_id); $i++) {
                $BookCategory = new BookCategory();
                $BookCategory->book_id = $Book->id;
                $BookCategory->category_id = $request->category_id[$i];
                $BookCategory->save();
            }
        }

        return redirect()->route('admin.buku.index')->with([
            'alert' => 'success',
            'msg' => 'Data berhasil diubah'
        ]);
    }

    public function destroy(Book $Book)
    {
        BookCategory::where('book_id', $Book->id)->delete();
        $Book->delete();
        return redirect()->route('admin.buku.index')->with([
            'alert' => 'success',
            'msg' => 'Data berhasil dihapus'
        ]);
    }
}
