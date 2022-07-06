<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'categories';

    protected $dates = ['created_at', 'updated_at', 'deleted_at'];

    public function bookCategory()
    {
        return $this->hasMany(BookCategory::class);
    }
}
