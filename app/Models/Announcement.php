<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Announcement extends Model
{
    use HasFactory;

    protected $table = 'announcements';
    protected $fillable = [
        'announcement_title',
        'announcement_image',
        'announcement_description',
    ];

    protected function casts(): array
    {
        return [
            'created_at'      => 'datetime',
            'updated_at'      => 'datetime',
        ];
    }
}
