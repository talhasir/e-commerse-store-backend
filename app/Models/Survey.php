<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Survey extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'slug',
        'status',
        'description', // corrected typo in attribute name
        'image',
        // 'image_url',
        'expire_date',
        'questions',
    ];
}
