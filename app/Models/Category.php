<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug', 'image', 'icon'];

    //relacion 1 N
    public function subcategories(){
        return $this->hasMany(Subcategory::class);
    }

    //relacion N N
    public function brands(){
        return $this->belongsToMany(Brand::class);
    }

    //relacion 1 N  atravez de otra relacion
    public function products(){
        return $this->hasManyThrough(Product::class, Subcategory::class);
    }
}
