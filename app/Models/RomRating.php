<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RomRating extends Model
{
    protected $table = 'rom_ratings';

    protected $fillable = [
        'user_id',
        'rom_id',
        'rating',
        'comment',
    ];
}
