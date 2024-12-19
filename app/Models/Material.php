<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'type',  // Jenis material (misalnya: Balok Kayu, Cat, Kaca)
        'stock', // Stok material dalam jumlah satuan yang sesuai
    ];
}
