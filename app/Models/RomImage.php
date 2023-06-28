<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RomImage extends Model
{
    protected $table = 'rom_images';

    protected $fillable = [
        'rom_id',
        'image_url',
        'image_thumbnail_url',
    ];
}
