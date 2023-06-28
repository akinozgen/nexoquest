<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property string $icon
 * @property string $image
 * @property string $company
 * @property string $release_date
 * @property string $discontinued_date
 * @property string $description
 * @property string $created_at
 * @property string $updated_at
 */
class Platform extends Model
{
    protected $table = 'platforms';

    protected $fillable = [
        'name',
        'slug',
        'icon',
        'image',
        'company',
        'release_date',
        'discontinued_date',
        'description',
    ];
}
