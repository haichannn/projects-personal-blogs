<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Str;

class Post extends Model
{
    /** @use HasFactory<\Database\Factories\PostFactory> */
    use HasFactory;

    protected $fillable = [
        "title",
        "slug",
        "body",
        "user_id"
    ];

    protected $casts = [
        "created_at" => "datetime",
        "update_at" => "datetime"
    ];

    public function setSlugAttribute($value) {
        $this->attributes["slug"] = Str::slug($value);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
