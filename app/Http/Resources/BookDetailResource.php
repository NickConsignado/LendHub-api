<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class BookDetailResource extends JsonResource
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
            'literaryAwards' => $this->literary_awards,
            'setting' => $this->setting,
            'characters' => $this->characters,
            'pages' => $this->pages,
            // 'published'=> Carbon::parse($this->published)->format('m d, Y'),
            'published' => $this->published,
            'publisher' => $this->publisher,
            'bookId' => $this->book_id,
            
        ];
    }
}
