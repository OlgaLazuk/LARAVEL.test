<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'price', 'photo'];

    public function getRouteKeyName()
    {
        return 'name';

    }
    public function getPagePhotoAttribute(){
        if (Storage::exists($this->attributes['photo'])){
            return Storage::url($this->attributes['photo']);
        }
        return 'https://cdn.shopify.com/s/files/1/0210/2968/3222/articles/trending_products_to_sell_in_India.jpg?v=1602180394';
    }




}
