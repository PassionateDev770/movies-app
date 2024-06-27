<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    protected $fillable = [
        'backdrop_path',
        'idm',
        'title',
        'original_title',
        'overview',
        'poster_path',
        'media_type',
        'adult',
        'original_language',
        'genre_ids',
        'popularity',
        'release_date',
        'video',
        'vote_average',
        'vote_count',
    ];

    protected $casts = [
        'release_date' => 'date',
        'genre_ids' => 'array',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];
}
