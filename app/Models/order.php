<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    use HasFactory;

    public function order_item(){
        return $this->hasMany(orderItem::class, 'order_id', 'id');
    }
}
