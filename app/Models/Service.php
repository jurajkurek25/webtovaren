<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'icon',
        'description',
        'features',
        'category',
        'is_addon',
        'sort_order',
        'is_active',
    ];

    protected $casts = [
        'features' => 'array',
        'is_addon' => 'boolean',
        'is_active' => 'boolean',
    ];

    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    public function scopeCore($query)
    {
        return $query->where('is_addon', false);
    }

    public function scopeAddons($query)
    {
        return $query->where('is_addon', true);
    }
}
