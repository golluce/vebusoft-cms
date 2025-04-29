<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Revision extends Model
{
    use HasFactory;

    protected $fillable = [
        'model_type',
        'model_id',
        'title',
        'slug',
        'content',
        'meta_title',
        'meta_description',
        'seo_keywords',
    ];
}
