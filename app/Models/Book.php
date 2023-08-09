<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    public function tag()
    {
        return $this->many(Tag::class);
    }
    public function description()
    {
        return $this->many(Description::class);
    }
}
