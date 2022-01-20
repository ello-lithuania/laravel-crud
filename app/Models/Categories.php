<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    use HasFactory;

    public function parent()
    {
        return $this->belongsTo(Categories::class);
    }

    public function children()
    {
        return $this->hasMany(Categories::class);
    }
    public static function all_items_category()
    {
        return $this->belongsToMany(Advertisement::class);
    }
}
