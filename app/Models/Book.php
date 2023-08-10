<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    public function tag()
    {
        return $this->belongsTo(Tag::class);
    }
    public function description()
    {
        return $this->belongsTo(Description::class);
    }
    public function borrowings()
    {
        return $this->hasMany(Borrowing::class);
    }
}
