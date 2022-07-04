<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Location;

class LocationController extends Controller
{
    public function index(Request $request)
    {
        $Locations = Location::paginate(20);
        $no = 1;
        return view('admin.location.main', compact('Locations', 'no'));
    }

    public function add()
    {
        return view('admin.location.add');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ], [
            'required' => 'Field :attribute tidak boleh kosong',
        ]);

        $Location = new Location();
        $Location->name = $request->name;
        $Location->save();

        return redirect()->route('admin.lokasi.index')->with([
            'alert' => 'success',
            'msg' => 'Data berhasil ditambahkan'
        ]);
    }

    public function edit(Location $Location)
    {
        return view('admin.location.edit', compact('Location'));
    }

    public function update(Location $Location, Request $request)
    {
        $request->validate([
            'name' => 'required',
        ], [
            'required' => 'Field :attribute tidak boleh kosong',
        ]);

        $Location->name = $request->name;
        $Location->save();

        return redirect()->route('admin.lokasi.index')->with([
            'alert' => 'success',
            'msg' => 'Data berhasil diubah'
        ]);
    }

    public function destroy(Location $Location)
    {
        $Location->delete();

        return redirect()->route('admin.lokasi.index')->with([
            'alert' => 'success',
            'msg' => 'Data berhasil dihapus'
        ]);
    }
}
