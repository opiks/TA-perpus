<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Borrower;
use App\Models\Book;
use App\Models\Member;

class BorrowerController extends Controller
{
    public function index(Request $Request)
    {
        $Borrowers = Borrower::paginate(20);
        $no = 1;
        return view('admin.borrorwer.main', compact('Borrowers', 'no'));
    }

    public function add()
    {
        $Books = Book::all();
        $Members = Member::all();

        return view('admin.borrorwer.add', compact('Books', 'Members'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'book_id' => 'required',
            'member_id' => 'required',
        ], [
            'required' => 'Field :attribute tidak boleh kosong',
        ]);

        $Book = Book::where('id', $request->book_id)->first();
        if ($Book->book_total_sisa >= 1) {
            $Borrower = new Borrower();
            $Borrower->member_id = $request->member_id;
            $Borrower->book_id = $request->book_id;
            $Borrower->status_borrower = 'Masih Dipinjam';
            $Borrower->save();
        } else {
            return redirect()->route('admin.peminjaman.add')->with([
                'alert' => 'warning',
                'msg' => 'Data sisa buku sudah habis'
            ]);
        }

        $bookUpdate = [
            'book_total_sisa' => $Book->book_total_sisa - 1
        ];

        Book::where('id', $request->book_id)->update($bookUpdate);

        return redirect()->route('admin.peminjaman.index')->with([
            'alert' => 'success',
            'msg' => 'Data berhasil ditambahkan'
        ]);
    }

    public function pengembalian(Borrower $Borrower)
    {
        $Borrower->tanggal_pengembalian = date('Y-m-d H:i:s');
        $Borrower->status_borrower = "Buku berhasil dikembalikan";
        $Borrower->save();

        $Book = Book::where('id', $Borrower->book_id)->first();

        $bookUpdate = [
            'book_total_sisa' => $Book->book_total_sisa + 1
        ];

        Book::where('id', $Borrower->book_id)->update($bookUpdate);

        return redirect()->route('admin.peminjaman.index')->with([
            'alert' => 'success',
            'msg' => 'Buku berhasil dikembalikan'
        ]);
    }
}
