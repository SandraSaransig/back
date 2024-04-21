<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    use HasFactory;

    protected $fillable = ['email','body', 'date_notification', 'type_notification', 'order_id', 'user_id'];

    //Relacion Pedido
    public function order(){
        return $this->belongsTo(Order::class);
    }
}
