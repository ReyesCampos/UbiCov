<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class avisosController extends Controller
{
    public function index (){
        $datos=\DB::table('avisos')->select('avisos.*')
        ->orderBy('id','DESC')
        ->get();
        return view('client.avisos')->with('avisos',$datos);
    }
}
