<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    protected $fillable = ['order_id', 'menu_item_id', 'quantity', 'price'];

    // Relationship: Each OrderItem belongs to a MenuItem
    public function menuItem()
    {
        return $this->belongsTo(MenuItem::class);
    }
}
