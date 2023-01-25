<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'image_url',
        'is_public',
        'user_id'
    ];

    /**
     * Get the user that owns the education.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
