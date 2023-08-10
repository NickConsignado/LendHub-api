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
            'borrowerName' => $this->borrower_name,
            'borrowedDate' => Carbon::parse($this->borrowed_date)->format('M d, Y H:i:s'),
            'returnedDate' => Carbon::parse($this->returned_date)->format('M d, Y H:i:s'),
            'bookId' => $this->book_id,
        ];
    }
}
