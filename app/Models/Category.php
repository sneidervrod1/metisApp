<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Category extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function levels(): BelongsToMany {
        return $this->belongsToMany(Level::class)->withPivot('weight_category');
    }

    public function subcategories(): HasMany {
    
        return $this->hasMany(Subcategory::class);
    }
}
