<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class HomePageResource extends JsonResource
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
            'recruiting' => $this->recruiting,
            'recruiting_full' => $this->recruiting_full,
            'about_title' => $this->about_title,
            'about_text' => $this->about_text,
            'education' => $this->education,
            'advantages' => $this->advantages,
            'we_choose' => $this->we_choose,
            'we_abandoned' => $this->we_abandoned,
            'admission' => $this->admission,
            'faq' => $this->faq,
            'slides' => $this->slides,
        ];
    }
}
