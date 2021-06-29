<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use App\Models\Aviso;
use PDF;

class avisosController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }

    public function index () {
        $datos=\DB::table('avisos')->select('avisos.*')
        ->orderBy('id','DESC')
        ->get();
        return view('admin.avisos')->with('avisos',$datos);
    }

    public function generar(){
        $datos=\DB::table('avisos')
        ->select('avisos.*')
        ->orderBy('avisos.id', 'DESC')
        ->get();
        $fecha=date("Y-m-d");
        $todo= compact('datos', 'fecha');
        $pdf = PDF::loadView('reportes.reporteAvisos', $todo);
        //return $pdf->download('reporte.pdf');
        return $pdf->stream('reporte'.date('Y_m_d_h_m_s').'.pdf');
    }

    public function store(Request $request)
    {
       $validator= Validator:: make($request->all(),[
           'aviso'=>'required|max:255|min:1',
           'titulo'=>'required|max:255|min:1'
       ]);
       if ($validator->fails()){
           return back()
           ->withInput()
           ->with('errorInsert', 'Favor de llenar todos los campos')
           ->withErrors($validator);
        }else{
            $aviso = Aviso::create([
                'color'=> "default",
                'titulo'=>request()->titulo,
                'aviso'=>request()->aviso
            ]);
            $aviso->save();
            return back()->with('Listo','Se ha insertado correctamente');
        }
       }

       public function destroy($id)
    {
        $aviso = Aviso::find($id);

        $aviso->delete();
        return back()->with('Listo','Se ha eliminado el registro correctamente');
    }

}
