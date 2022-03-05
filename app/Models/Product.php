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

    // Relacion M:M
    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

    // El producto pertenece al vendedor puesto que dicho producto tiene la FK
    public function seller()
    {
        return $this->belongsTo(Seller::class);
    }

    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }
}
