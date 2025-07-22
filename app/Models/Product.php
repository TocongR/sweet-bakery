<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    protected $fillable = [
        'name',
        'category_id',
        'price',
        'status',
        'image',
        'description',
        'isFeatured'
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function scopeFilter($query, array $filters) {
        if($filters['search'] ?? false) {
            $query->where(function ($q) use ($filters) {
                $q->where('name', 'like', '%' . $filters['search'] . '%')
                ->orWhere('description', 'like', '%' . $filters['search'] . '%');
            });
        }

        if($filters['status'] ?? false) {
            $query->where('status', 'like', $filters['status']);
        }

        if($filters['category'] ?? false) {
            $query->where('category_id', 'like', $filters['category']);
        }

    }
}
