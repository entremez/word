<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Certificado;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    public function generateDocx()
    {
    	 $template = new \PhpOffice\PhpWord\TemplateProcessor('template.docx');

         $template->setValue('numberOfCertificate','8511261-15');

         $template->setValue('test','8511261-15');
    	 $template->setValue('address', 'Alcántara N° 44, Piso 7, Las Condes, Santiago Alcántara N° 44, Piso 7, Las Condes, Santiago Alcántara N° 44, Piso 7, Las Condes, Santiago');

    	 $name = 'nombre.docx';

		try {
            $template->saveAs(storage_path($name));
        } catch (Exception $e) {
        }

        return response()->download(storage_path($name));        
    
    }

    public function welcome()
    {

        return view('home');
    }

    public function data()
    {
        $data = '[';
        foreach (Certificado::get() as $key => $value) {

            $data.= "{value:'".$value->modelo."'},";
        }
        $data = substr($data, 0, -1);
        $data .= ']';
        return json_encode($data);
    }

    public function potenza()
    {

        return view('potenza',[
            'certificados' => Certificado::all()
        ]);
    }


}
