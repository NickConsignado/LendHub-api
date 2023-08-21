<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Borrowing extends Model
{
    use HasFactory;
    protected $fillable = [
        'borrowed_by',  
        'borrowed_date', 
        'return_date', 
        'book_id',

    ];
    public function books()
    {
        return $this->belongsTo(Book::class);
    }
    
}
