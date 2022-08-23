<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Image\Exceptions\InvalidManipulation;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Grade extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;

    protected $fillable = [
        'slug',
        'title',
        'price',
        'extra',
        'badge',
        'schedule',
        'price_extra',
        'section',
        'lesson',
        'image'
    ];

    public function getRouteKeyName(): string
    {
        return 'slug';
    }

    /**
     * @throws InvalidManipulation
     */
    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('cropped')
            ->crop('crop-center', 440, 290)
            ->nonQueued()
            ->nonOptimized();
        $this->addMediaConversion('big')
            ->crop('crop-center', 700, 448)
            ->nonQueued()
            ->nonOptimized();
        $this->addMediaConversion('cropped_webp')
            ->format('webp')
            ->crop('crop-center', 440, 290)
            ->nonQueued()
            ->nonOptimized();
        $this->addMediaConversion('big_webp')
            ->format('webp')
            ->crop('crop-center', 700, 448)
            ->nonQueued()
            ->nonOptimized();
    }

    protected function getImageAttribute()
    {
        $file = $this->getMedia('grades')->first();
        if ($file) {
            $file->url = $file->getUrl();
            $file->cropped = $file->getUrl('cropped');
            $file->full = $file->getUrl('big');
            $file->cropped_webp = $file->getUrl('cropped_webp');
            $file->full_webp = $file->getUrl('big_webp');
        }

        return $file;
    }

}
