<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ose;
use Carbon\Carbon;

class PotenzaController extends Controller
{
    public function show()
    {
        return view('potenza',[
            'oses' => Ose::where('fecha_envio', '>', Carbon::now()->subMonths(1))
            				->where('ensayo','!=','Tipo')
            				->where('numero_sec','!=','')
            				->where('numero_sec','!=','pendiente')
            				->orderBy('fecha_certificado', 'desc')->get()
        ]);
    }
}
