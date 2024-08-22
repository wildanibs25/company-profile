<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Headmaster extends Model
{
    use HasFactory;

    protected $table = 'headmasters';
    protected $fillable = [
        'headmaster_name',
        'headmaster_photo',
        'headmaster_description',
    ];

    protected function casts(): array
    {
        return [
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
        ];
    }
}
