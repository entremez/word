<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ose extends Model
{
	protected $table = 'sistema1';

	protected $fillable = [
        'oti',
        'solicitante',
        'rut_empresa',
        'direccion_empresa',
        'ensayo',
        'numero_sec',
        'fecha_certificado',
    ];
}
