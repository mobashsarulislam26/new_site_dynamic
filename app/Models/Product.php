<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $fillable = ['id','name', 'slug', 'short_description', 'description', 'sale_price','old_price','stockStatus', 'image', 'images', 'category_id'];

    public function category()
            {
            return $this->belongsTo(Category::class, 'category_id', 'id');
        }


//     protected $table = 'products';
//     protected $fillable = ['name', 'slug', 'short_description', 'description', 'sale_price', 'stockStatus', 'image', 'images', 'category_id'
// ];

// public function category()
//         {
//         return $this->belongsTo(Category::class, 'category_id', 'id');

//         }

}
