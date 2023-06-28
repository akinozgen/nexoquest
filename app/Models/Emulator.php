<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property string|null $description
 * @property int $platform_id
 * @property string|null $homepage
 * @property string|null $download
 */
class Emulator extends Model
{
    protected $table = 'emulators';

    protected $fillable = [
        'name',
        'slug',
        'description',
        'platform_id',
        'homepage',
        'download',
    ];
}
