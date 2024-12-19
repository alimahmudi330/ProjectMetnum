<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'name',    // Nama item
        'wood',    // Kebutuhan balok kayu dalam cm
        'paint',   // Kebutuhan cat dalam ml
        'glass',   // Kebutuhan kaca/cermin dalam cm
    ];
}
