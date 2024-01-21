<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';
    protected $primaryKey = 'product_id';

    protected $fillable = [
        'product_name',
        'product_picture',
        'product_price',
        'product_type',
        'product_description',
        'product_note',
        'product_qty',
        'created_at',
        'updated_at'
    ];

    public function carts()
    {
        return $this->hasMany(Cart::class, 'product_id');
    }
}
