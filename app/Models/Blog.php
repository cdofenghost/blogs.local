<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Blog extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'category_id',
        'author_id',
        'title',
        'content',
        'preview_image',
        'hidden',
        'published_at',
        'edited_at',
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function scopeFilter($query, array $filters) {
        if ($filters['search'] ?? false) {
            $query->where('title','like','%'. request('search') .'%')
                ->orWhere('content','like','%'. request('search') .'%');
        }
    }
}
