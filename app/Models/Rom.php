<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
}
