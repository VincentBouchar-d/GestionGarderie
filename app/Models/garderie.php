<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class garderie extends Model
{
    use HasFactory;

    protected $fillable = ['Nom', 'Adresse','Ville','Telephone','id_province'];
    public $timestamps = false;

    public function province()
    {
        return $this->hasOne(province::class);
    }
}
