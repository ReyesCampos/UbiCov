<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use App\Models\Simbologia;
use PDF;

class SemaforizacionController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }

    public function index()
    {
        $datos=\DB::table('simbologias')->select('simbologias.*')
        ->orderBy('id','DESC')
        ->get();
        return view('admin.semaforizacion')->with('simbologias',$datos);
    }

    public function generar(){
        $datos=\DB::table('simbologias')
        ->select('simbologias.*')
        ->orderBy('simbologias.id', 'DESC')
        ->get();
        $fecha=date("Y-m-d");
        $contador=Simbologia::count();
        $todo= compact('datos', 'fecha', 'contador');
        $pdf = PDF::loadView('reportes.reporteSemaforo', $todo);
        //return $pdf->download('reporte.pdf');
        return $pdf->stream('reporte'.date('Y_m_d_h_m_s').'.pdf');
        
    }

    public function store(Request $request)
    {
       $validator= Validator:: make($request->all(),[
           'leyenda'=>'required|max:255|min:1',
           'color'=>'required|max:255|min:1',
           'simbolo'=>'required|max:255|min:1'
       ]);
       if ($validator->fails()){
           return back()
           ->withInput()
           ->with('errorInsert', 'Favor de llenar todos los campos')
           ->withErrors($validator);
        }else{
            $simbologia = Simbologia::create([
                'leyenda'=>request()->leyenda,
                'color'=>request()->color,
                'simbolo'=>request()->simbolo,
            ]);
            $simbologia->save();
            return back()->with('Listo','Se ha insertado correctamente');
        }
    }

    public function destroy($id)
    {
        $simbologia = Simbologia::find($id);

        $simbologia->delete();
        return back()->with('Listo','Se ha eliminado el registro correctamente');
    }

}
