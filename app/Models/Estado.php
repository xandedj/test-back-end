<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    // use HasFactory;
    protected $table = 'estados';
    public $timestamps = true;
    protected $fillable = [
                            'sigla',
                            'nome'
                        ];
}
