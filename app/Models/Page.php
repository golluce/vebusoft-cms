<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'content',
        'meta_title',
        'meta_description',
        'status',
    ];

    public function getStatusBadge()
    {
        return match($this->status) {
            1 => ['text' => 'Yayında', 'color' => 'success'],
            2 => ['text' => 'Taslak', 'color' => 'warning'],
            0 => ['text' => 'Bekliyor', 'color' => 'secondary'],
            default => ['text' => 'Bilinmiyor', 'color' => 'dark'],
        };
    }

}
