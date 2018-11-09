<?php

namespace App\Imports;

use App\Certificado;
use Maatwebsite\Excel\Concerns\ToModel;

class CertificadosImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Certificado([
            'ose' => $row[4], 
            'ocp' => $row[3], 
            'modelo' => $row[9], 
            'di' => $row[12],
            'cliente' => $row[6],
            'lote' => $row[10],
            'certificado' => $row[16],
            'seguimiento' => $row[17]
        ]);
    }
}
