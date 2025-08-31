<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model
{
    protected $fillable = [
        'order_id',
        'menu_item_id',
        'quantity',
        'price',
    ];

    public function menuItem()
    {
        return $this->belongsTo(MenuItem::class);
    }
}
