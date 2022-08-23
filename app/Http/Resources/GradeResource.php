<?php

namespace App\Http\Resources;

use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class GradeResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param Request $request
     * @return array
     */
    public function toArray($request): array
    {
        return [
            'slug' => $this->slug,
            'title' => $this->title,
            'price' => $this->price,
            'extra' => $this->extra,
            'badge' => $this->badge,
            'schedule' => $this->schedule,
            'price_extra' => $this->price_extra,
            'section' => $this->section,
            'lesson' => $this->lesson,
            'image' => $this->image
        ];
    }
}
