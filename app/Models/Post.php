<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property bool $published
 */
class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'title',
        'content',
        'published_at',
        'published',
    ];

    protected $casts = [
        'published_at' => 'datetime',
        'published'    => 'boolean',
    ];

    public function isPublished() {
        return $this->published && $this->published_at;
    }
}
