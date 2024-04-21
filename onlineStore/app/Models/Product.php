<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'price', 'image_uri', 'weight', 'size', 'stock', 'brand_id'];

    //Relacion con marca
    public function brand(){
        return $this->belongsTo(Brand::class);
    }

    //Relacion categoria
    public function categories(){
        return $this->hasMnay(Category::class);
    }

    //Relacion pedido
    public function order(){
        return $this->belongsToMany(Order::class);;
    }
}
