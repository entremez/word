<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Certificado extends Model
{
    protected $fillable = [
        'modelo', 
        'di',
        'cliente',
        'lote',
        'certificado',
        'seguimiento',
        'ose',
        'ocp'
    ];
}
