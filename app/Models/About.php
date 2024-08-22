<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;

    protected $table = 'abouts';
    protected $fillable = [
        'school_name',
        'school_logo',
        'school_tagline',
        'school_description',
        'since',
    ];
    
    protected function casts(): array
    {
        return [
            'since' => 'datetime',
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
        ];
    }
}
