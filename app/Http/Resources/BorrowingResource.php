<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class BorrowingResource extends JsonResource
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
            'borrowedBy' => $this->borrowed_by,
            'borrowedDate' => $this->borrowed_date,
            'returnDate' => $this->return_date,
            'bookId' => $this->book_id,
        ];
    }
}
