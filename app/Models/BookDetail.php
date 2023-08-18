<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookDetail extends Model
{
    use HasFactory;
    protected $fillable = [
        'literary_awards',
        'setting',
        'characters',
        'pages',
        'published',
        'publisher',
        'book_id'

    ];
    public function book()
    {
        return $this->belongsTo(Book::class);
        //return $this->belongsTo('App\Models\Book', 'id', 'book_id');
    }
}
