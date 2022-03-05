<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;


class Buyer extends User
{
    use HasFactory;

    // Relacion 1:M
    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }
}
