<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Str;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'description',
        'color',
        'icon',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    // Relationships
    public function posts(): HasMany
    {
        return $this->hasMany(Post::class);
    }

    public function publishedPosts(): HasMany
    {
        return $this->hasMany(Post::class)
                    ->where('status', 'published')
                    ->where('published_at', '<=', now());
    }

    // Scopes
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    public function scopeWithPostCount($query)
    {
        return $query->withCount(['posts' => function($q) {
            $q->where('status', 'published')
              ->where('published_at', '<=', now());
        }]);
    }

    // Mutators
    public function setNameAttribute($value)
    {
        $this->attributes['name'] = $value;
        $this->attributes['slug'] = Str::slug($value);
    }

    // Accessors
    public function getPostsCountAttribute()
    {
        return $this->posts()
                    ->where('status', 'published')
                    ->where('published_at', '<=', now())
                    ->count();
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}