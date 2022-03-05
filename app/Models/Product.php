<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    const PRODUCTO_DISPINIBLE = 'disponible';
    const PRODUCTO_NO_DISPINIBLE = 'no disponible';

    protected $fillable = [
        'name',
        'description',
        'quantity',
        'status',
        'image',
        'seller_id'
    ];
    public function estaDisponible()
    {
        return $this->status == Product::PRODUCTO_DISPINIBLE;
    }
}
