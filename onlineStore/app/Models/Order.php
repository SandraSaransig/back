<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = ['date_of_order', 'total', 'status', 'shipping_address', 'payment_date', 'user_id'];

    //Relacion productos
    public function products(){
        return $this->belongsToMany(Product::class);
    }

    //Relacion Notificaciones
    public function notifications(){
        return $this->hasMany(Notification::class);
    }
}
