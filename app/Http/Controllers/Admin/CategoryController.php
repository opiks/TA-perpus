<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index(Request $request)
    {
        $Categories = Category::paginate(20);
        $no = 1;
        return view('admin.category.main', compact('Categories', 'no'));
    }

    public function add()
    {
        return view('admin.category.add');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ], [
            'required' => 'Field :attribute tidak boleh kosong',
        ]);

        $Category = new Category();
        $Category->name = $request->name;
        $Category->save();

        return redirect()->route('admin.kategori.index')->with([
            'alert' => 'success',
            'msg' => 'Data berhasil ditambahkan'
        ]);
    }

    public function edit(Category $Category)
    {
        return view('admin.category.edit', compact('Category'));
    }

    public function update(Category $Category, Request $request)
    {
        $request->validate([
            'name' => 'required',
        ], [
            'required' => 'Field :attribute tidak boleh kosong',
        ]);

        $Category->name = $request->name;
        $Category->save();

        return redirect()->route('admin.kategori.index')->with([
            'alert' => 'success',
            'msg' => 'Data berhasil ditambahkan'
        ]);
    }

    public function destroy(Category $Category)
    {
        $Category->delete();

        return redirect()->route('admin.kategori.index')->with([
            'alert' => 'success',
            'msg' => 'Data berhasil dihapus'
        ]);
    }
}
