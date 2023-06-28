<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmulatorImage extends Model
{
    protected $table = 'emulator_images';

    protected $fillable = [
        'name',
        'path',
        'emulator_id',
    ];
}
