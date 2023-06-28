<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RomTag extends Model
{
    protected $table = 'rom_tags';

    protected $fillable = [
        'rom_id',
        'tag',
    ];
}
