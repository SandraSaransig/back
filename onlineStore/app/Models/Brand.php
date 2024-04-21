<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;

       // definir una lista blanca de atributos que sí pueden ser asignados masivamente
       protected $fillable = ['name', 'description'];

    //Metodo relacionar con productos
    public function products(){
        return $this->HasMany(Product::class);
    }
}
