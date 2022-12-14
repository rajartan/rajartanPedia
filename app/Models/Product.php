<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function liga() {
        return $this->belongsTo(Liga::class);
    }

    public function pesanan_details() {
        return $this->hasMany(PesananDetail::class);
    }
}
