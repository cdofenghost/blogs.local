<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function blogs(): HasMany
    {
        return $this->hasMany(Blog::class);
    }

    public function scopeFilter($query, array $filters) {
        if ($filters['search'] ?? false) {
            $query->where('title','like','%'. request('search') .'%')
                ->orWhere('content','like','%'. request('search') .'%');
        }
    }
}
