<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'product_id'];

    //Relacion producto
    public function product(){
        return $this->belongsTo(Product::class);
    }
}
