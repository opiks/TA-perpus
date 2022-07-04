<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Member;

class MemberController extends Controller
{
    public function index(Request $request)
    {
        $Members = Member::paginate(20);
        $no = 1;
        return view('admin.member.main', compact('Members', 'no'));
    }

    public function add()
    {
        return view('admin.member.add');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nik' => 'required',
            'name' => 'required',
            'email' => 'required',
            'nomor_telepon' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'gol_darah' => 'required',
            'jenis_kelamin' => 'required',
            'address' => 'required',
            'member_photo_name' => 'mimes:jpeg,bmp,png,gif,svg,pdf|nullable',
        ], [
            'required' => 'Field :attribute tidak boleh kosong',
            'mimes' => 'Field :attribute harus berformat: file jpeg, bmp, png, gif, svg, pdf',
        ]);

        $path_foto = '';
        $name_foto = '';
        if ($request->hasFile('member_photo_name')) {
            $path_foto = 'member/foto/';
            $name_foto = 'Foto (' . strtotime('now') . ') ' . date('d-m-Y') . ' ' . $request->file('member_photo_name')->getClientOriginalName();
            Storage::disk('public')->put($path_foto . $name_foto, file_get_contents($request->file('member_photo_name')));
        }

        $Member = new Member();
        $Member->email = $request->email;
        $Member->nomor_telepon = $request->nomor_telepon;
        $Member->name = $request->name;
        $Member->address = $request->address;
        $Member->agama = $request->agama;
        $Member->nik = $request->nik;
        $Member->tempat_lahir = $request->tempat_lahir;
        $Member->tanggal_lahir = $request->tanggal_lahir;
        $Member->gol_darah = $request->gol_darah;
        $Member->jenis_kelamin = $request->jenis_kelamin;
        $Member->member_photo_name = $name_foto;
        $Member->member_photo_path = $path_foto;
        $Member->save();

        return redirect()->route('admin.member.index')->with([
            'alert' => 'success',
            'msg' => 'Data berhasil ditambahkan'
        ]);
    }

    public function edit(Member $Member)
    {
        return view('admin.member.edit', compact('Member'));
    }

    public function update(Member $Member, Request $request)
    {
        $request->validate([
            'nik' => 'required',
            'name' => 'required',
            'email' => 'required',
            'nomor_telepon' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'gol_darah' => 'required',
            'jenis_kelamin' => 'required',
            'address' => 'required',
            'member_photo_name' => 'mimes:jpeg,bmp,png,gif,svg,pdf|nullable',
        ], [
            'required' => 'Field :attribute tidak boleh kosong',
            'mimes' => 'Field :attribute harus berformat: file jpeg, bmp, png, gif, svg, pdf',
        ]);

        $path_foto = $Member->member_photo_path;
        $name_foto = $Member->member_photo_name;
        if ($request->hasFile('member_photo_name')) {
            $path_foto = 'member/foto/';
            $name_foto = 'Foto (' . strtotime('now') . ') ' . date('d-m-Y') . ' ' . $request->file('member_photo_name')->getClientOriginalName();
            Storage::disk('public')->put($path_foto . $name_foto, file_get_contents($request->file('member_photo_name')));
        }

        $Member->email = $request->email;
        $Member->nomor_telepon = $request->nomor_telepon;
        $Member->name = $request->name;
        $Member->address = $request->address;
        $Member->agama = $request->agama;
        $Member->nik = $request->nik;
        $Member->tempat_lahir = $request->tempat_lahir;
        $Member->tanggal_lahir = $request->tanggal_lahir;
        $Member->gol_darah = $request->gol_darah;
        $Member->jenis_kelamin = $request->jenis_kelamin;
        $Member->member_photo_name = $name_foto;
        $Member->member_photo_path = $path_foto;
        $Member->save();

        return redirect()->route('admin.member.index')->with([
            'alert' => 'success',
            'msg' => 'Data berhasil diubah'
        ]);
    }

    public function destroy(Member $Member)
    {
        $Member->delete();

        return redirect()->route('admin.member.index')->with([
            'alert' => 'success',
            'msg' => 'Data berhasil dihapus'
        ]);
    }
}
