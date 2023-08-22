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
        'image_url',


    ];


    public function borrowings()
    {
        return $this->hasMany(Borrowing::class);
    }
    public function bookDetail()
    {
        return $this->hasOne(BookDetail::class);
    }
}
