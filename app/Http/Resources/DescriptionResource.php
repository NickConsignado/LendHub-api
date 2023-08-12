<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class DescriptionResource extends JsonResource
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
            'originalTitle' => $this->original_title,
            'author' => $this->author,
            'backgroundInfo' => $this->background_info,
            'literaryAwards' => $this->literary_awards,
            'series' => $this->series,
            'setting' => $this->setting,
            'characters' => $this->characters,
        ];
    }
}
