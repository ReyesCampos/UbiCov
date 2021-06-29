@extends('client.layouts.main')
<link href="{{asset('/dash/css/estilos.css')}}" rel="stylesheet" />

@section('contenido')

<header class="masthead text-center text-white">
            <div class="masthead-content">
                <div class="container">
                <img src="{{asset('/img/warning.png')}}" class="card-img-top" alt="..." style="height: 50%">
                    <h1>Avisos</h1>
                </div>
            </div>
</header>

<p></p>
<p></p>
<p></p>

<div class="container">
    <div class="row">
        @foreach($avisos as $a)
            <div class="col-12">
                <div class="card card-chart">
                    <div class="card-header card-header" style="background-color:#068A75" >
                    </div>
                    <div class="card-body">
                    <h3 class="card-title">{{  $a->titulo }}</h3>
                    <p> {{  $a->aviso  }}</p>
                    </div>
                </div>
                </div>
            @endforeach      
</div>
</div>

@endsection