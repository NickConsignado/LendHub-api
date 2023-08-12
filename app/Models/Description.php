<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Description extends Model
{
    use HasFactory;

    protected $fillable = [
        'original_title',
        'author',
        'background_info',
        'literary_awards',
        'series',
        'setting',
        'characters'
    ];

    public function book()
    {
        return $this->hasOne(Book::class);
    }
}
