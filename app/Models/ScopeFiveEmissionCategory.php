<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ScopeFiveEmissionCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'group',
        'name',
        'status',
        'factor',
        'status',
        'extras',
    ];
}
