<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RomDownload extends Model
{
    protected $table = 'rom_downloads';

    protected $fillable = [
        'rom_id',
        'downloads',
        'url'
    ];
}
