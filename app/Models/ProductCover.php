<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductCover extends Model
{
    use HasFactory;
    protected $table ="productCovers";
    protected $fillable =['id','title','image'];
}
