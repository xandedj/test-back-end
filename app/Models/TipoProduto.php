<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoProduto extends Model
{
    //use HasFactory;
    protected $table = 'tipo_produtos';
    public $timestamps = true;
    protected $fillable = ['tipo'];
}
