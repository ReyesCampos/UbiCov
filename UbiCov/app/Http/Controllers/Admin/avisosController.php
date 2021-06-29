<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use App\Models\Aviso;

class avisosController extends Controller
{
    public function index () {
        $datos=\DB::table('avisos')->select('avisos.*')
        ->orderBy('id','DESC')
        ->get();
        return view('admin.avisos')->with('avisos',$datos);
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
