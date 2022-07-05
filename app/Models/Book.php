<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Book extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'books';

    protected $dates = ['tanggal_rilis', 'created_at', 'updated_at', 'deleted_at'];

    public function bookCategories()
    {
        return $this->hasMany(BookCategory::class);
    }
}
