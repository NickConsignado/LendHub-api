<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Borrowing extends Model
{
    use HasFactory;

    protected $fillable = [
        'borrower_name',
        'borrowed_date',
        'returned_date',
        'book_id'
    ];
    public function books()
    {
        return $this->hasMany(Book::class);
    }
}
