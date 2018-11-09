<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Certificado;
use Illuminate\Support\Facades\Storage;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\CertificadosImport;

class HomeController extends Controller
{

    private $excel;

    public function __construct(Excel $excel)
    {
        $this->excel = $excel;
    }

    public function generateDocx($id)
    {
        $certificado = Certificado::find($id);
    	 $template = new \PhpOffice\PhpWord\TemplateProcessor('template2.docx');


         $template->setValue('certificado',$certificado->certificado);
         $template->setValue('seguimiento',$certificado->seguimiento);


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

    public function import()
    {
        return view('import');
    }

    public function importExcel(Request $request)
    {

        Excel::import(new CertificadosImport, $request->file('excel'));
        return redirect('/potenza')->with('success', 'All good!');

    }


}
