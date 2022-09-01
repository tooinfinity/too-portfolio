<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'url',
        'image_url',
        'is_published',
        'is_opensource',
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
