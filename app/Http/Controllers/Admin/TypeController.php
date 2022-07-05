<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Type;

class TypeController extends Controller
{
    public function index(Request $request)
    {
        $Types = Type::paginate(20);
        $no = 1;
        return view('admin.tipe.main', compact('Types', 'no'));
    }

    public function add()
    {
        return view('admin.tipe.add');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ], [
            'required' => 'Field :attribute tidak boleh kosong',
        ]);

        $Type = new Type();
        $Type->name = $request->name;
        $Type->save();

        return redirect()->route('admin.tipe.index')->with([
            'alert' => 'success',
            'msg' => 'Data berhasil ditambahkan'
        ]);
    }

    public function edit(Type $Type)
    {
        return view('admin.tipe.edit', compact('Type'));
    }

    public function update(Type $Type, Request $request)
    {
        $request->validate([
            'name' => 'required',
        ], [
            'required' => 'Field :attribute tidak boleh kosong',
        ]);

        $Type->name = $request->name;
        $Type->save();

        return redirect()->route('admin.tipe.index')->with([
            'alert' => 'success',
            'msg' => 'Data berhasil diubah'
        ]);
    }

    public function destroy(Type $Type)
    {
        $Type->delete();

        return redirect()->route('admin.tipe.index')->with([
            'alert' => 'success',
            'msg' => 'Data berhasil dihapus'
        ]);
    }
}
