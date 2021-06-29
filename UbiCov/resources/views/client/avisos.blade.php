@extends('client.layouts.main')
<link href="{{asset('/dash/css/estilos.css')}}" rel="stylesheet" />

@section('contenido')

<header class="masthead text-center text-white">
            <div class="masthead-content">
                <div class="container">
                <img src="{{asset('/img/warning.png')}}" class="card-img-top" alt="..." style="height: 50%; width: 50%;">
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
            <div class="alert alert-success col-12" role="alert">
                <h4 class="alert-heading">{{  $a->titulo  }}</h4>
                <p class="card-text" style="text-align: justify">{{  $a->aviso  }}</p>
            </div>
        @endforeach      
</div>
</div>

@endsection