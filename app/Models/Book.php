<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'author',
        'subtitle',
        'stocks',
        'genre',
        'thumbnail',

    ];
    public function book_detail()
    {
        return $this->belongsTo(Book_Detail::class);
    }
    public function borrowings()
    {
        return $this->hasMany(Borrowing::class);
    }
}
