<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class garderie extends Model
{
    use HasFactory;

    protected $fillable = ['nom', 'adresse','ville','province','telephone'];
    public $timestamps = false;
}
