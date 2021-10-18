<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'price', 'description', 'active', 'photo'];

    protected $casts = [
        'active' => 'boolean',
        'description' => 'array',
        'created_at' => 'date:Y-m-d'
    ];

    public function caregory(){
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }




    public function getPagePhotoAttribute()
    {
        if (Storage::exists($this->attributes['photo'])) {
            return Storage::url($this->attributes['photo']);
        }
        return 'https://oracle-patches.com/images/2020/07/01/null-oracle_large.jpg';
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }


    public function getRouteKeyName()
    {
        return 'name';
    }
}
