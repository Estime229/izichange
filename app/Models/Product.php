<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public $timestamps = false;
    protected $fillable = ['name', 'price_ht', 'creation_date', 'date_update'];
    protected $casts = [
        'creation_date' => 'datetime',
        'date_update' => 'datetime',
    ];
}