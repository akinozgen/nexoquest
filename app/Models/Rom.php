<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property string $description
 * @property int $downloads
 * @property int $platform_id
 * @property int $emulator_id
 * @property string $release_date
 * @property string $publisher
 * @property string $genre
 * @property string $region_code
 * @property int $metacritic_score
 * @property string $metacritic_url
 * @property string $video_trailer
 * @property string $official_website
 * @property string $created_at
 * @property string $updated_at
 */
class Rom extends Model
{
    protected $table = 'roms';

    protected $fillable = [
        'name',
        'slug',
        'description',
        'downloads',
        'platform_id',
        'emulator_id',
        'release_date',
        'publisher',
        'genre',
        'region_code',
        'metacritic_score',
        'metacritic_url',
        'video_trailer',
        'official_website',
    ];

    public function images(): HasMany
    {
        return $this->hasMany(RomImage::class);
    }

    public function emulator(): BelongsTo
    {
        return $this->belongsTo(Emulator::class);
    }

    public function platform(): BelongsTo
    {
        return $this->belongsTo(Platform::class);
    }

    public function getCoverImage()
    {
        return $this->images()->first()->image_thumbnail_url;
    }
}
