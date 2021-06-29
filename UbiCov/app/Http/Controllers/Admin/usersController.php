<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator; 
use App\Models\Empresa;
use App\Models\user;
use File;

class usersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos=\DB::table('empresas')->select('empresas.*')
        ->orderBy('id','DESC')
        ->get();
        $user=\DB::table('users')->select('users.*')
        ->orderBy('id','DESC')
        ->get();
        return view('admin.users')->with('empresas',$datos)->with('user',$user);
    }

    public function generar(){
        $datos=\DB::table('empresas')
        ->select('empresas.*', 'users.id as idUser', 'users.email', 'users.name')
        ->orderBy('empresas.id', 'DESC')
        ->join('users', 'empresas.id_user', '=', 'users.id')
        ->get();
        $fecha=date("Y-m-d");
        $todo= compact('datos', 'fecha');
        $pdf = PDF::loadView('reportes.reporteNegocio', $todo);
        //return $pdf->download('reporte.pdf');
        return $pdf->stream('reporte'.date('Y_m_d_h_m_s').'.pdf');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $validator= Validator:: make($request->all(),[
           'nombre'=>'required|max:255|min:1',
           'tipo'=>'required|max:255|min:1',
           'estado'=>'required|max:255|min:1',
           'ciudad'=>'required|max:255|min:1',
           'cp'=>'required|numeric',
           'colonia'=>'required|max:255|min:1',
           'numExterior'=>'required|numeric',
           'numInterior'=>'required|max:255|min:1'
       ]);
       if ($validator->fails()){
           return back()
           ->withInput()
           ->with('errorInsert', 'Favor de llenar todos los campos')
           ->withErrors($validator);
        }else{
            $empresa = Empresa::create([
                'nombre'=>request()->nombre,
                'tipo'=>request()->tipo,
                'estado'=>request()->estado,
                'ciudad'=>request()->ciudad,
                'cp'=>request()->cp,
                'colonia'=>request()->colonia,
                'calle'=>request()->calle,
                'numExterior'=>request()->numExterior,
                'numInterior'=>request()->numInterior,
                'id_user'=>request()->id_user
            ]);
            $empresa->save();
            return back()->with('Listo','Se ha insertado correctamente');
        }
       }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $empresa =Empresa::find($id);

        $empresa->delete();
        return back()->with('Listo','Se ha eliminado el registro correctamente');
    }
}
