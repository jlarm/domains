<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Domain extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'registrar',
        'registrar_url',
        'expiration',
        'status',
    ];

    protected $casts = [
        'expiration' => 'date',
    ];
}
