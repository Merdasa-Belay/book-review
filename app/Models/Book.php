<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Query\Builder as QueryBuilder;

class Book extends Model
{
    use HasFactory;
    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
    // search
    public function scopeTitle(Builder $query, string $title): Builder
    {
        return $query->where('title', 'LIKE', "%$title%");
    }
}
