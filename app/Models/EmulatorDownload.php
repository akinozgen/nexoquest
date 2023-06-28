<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmulatorDownload extends Model
{
    protected $table = 'emulator_downloads';

    protected $fillable = [
        'name',
        'emulator_id',
        'url'
    ];
}
