<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ScopeFiveEmissionCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'group',
        'name',
        'status',
        'factor',
        'status',
        'extras',
        'created_at',
        'updated_at'
    ];
}
