<?php

namespace App\Http\Resources;

use App\Models\BookDetail;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class BookResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'author' => $this->author,
            'subtitle' => $this->subtitle,
            'stocks' => $this->stocks,
            'genre' => $this->genre,
            'thumbnail' => $this->thumbnail,
            'bookDetail' => $this->bookDetail,
        ];
    }
}
