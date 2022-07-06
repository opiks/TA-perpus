<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Borrower extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'borrowers';

    protected $dates = ['tanggal_pengembalian', 'created_at', 'updated_at', 'deleted_at'];

    public function member()
    {
        return $this->belongsTo(Member::class);
    }

    public function book()
    {
        return $this->belongsTo(Book::class);
    }
}
