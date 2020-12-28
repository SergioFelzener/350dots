<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'country', 'local', 'date', 'time', 'interest', 'lat', 'long', 'status', 'slug'];

    // public function getSlugOptions() : SlugOptions {

    //     return SlugOptions::create()->generateSlugsFrom('name')->saveSlugsTo('slug');

    // }

    public function categories() {
        return $this->belongsToMany(Category::class);
    }
}
