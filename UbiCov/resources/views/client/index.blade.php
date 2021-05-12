@extends('client.layouts.main')
<link href="{{asset('/dash/css/estilos.css')}}" rel="stylesheet" />

@section('contenido')
<header class="masthead text-center text-white">
            <div class="masthead-content">
                <div class="container">
                    <h1><img src="{{asset('/img/logoof.png')}}" class="d-block w-100" alt="..." /> </h1>
                    <a class="btn btn-primary btn-xl rounded-pill mt-5" href="#!">Descarga la APP</a>
                </div>
            </div>
        </header>
        <section>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="p-5"><img class="img-fluid " src="{{asset('/img/1.jpg')}}" alt="..." /></div>
                    </div>
                    <div class="col-lg-6">
                        <div class="p-5">
                            <h2 class="display-4" id="subtitulo">Inicio de Sesión</h2>
                            <p id="caracteristicas"> En caso de ser miembro de UbiCov puedes acceder solo al dar clic en "Iniciar Sesión".</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 order-lg-2">
                        <div class="p-5"><img class="img-fluid" src="{{asset('/img/2.jpg')}}" alt="..." /></div>
                    </div>
                    <div class="col-lg-6 order-lg-1">
                        <div class="p-5">
                            <h2 class="display-4" id="subtitulo">¿Aún no eres miembro de UbiCov?</h2>
                            <p id="caracteristicas">Si aún no eres miembro de UbiCov ¡Corre a Registrarte! Hazlo como empresa o persona.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="p-5"><img class="img-fluid " src="{{asset('/img/3.jpg')}}" alt="..." /></div>
                    </div>
                    <div class="col-lg-6">
                        <div class="p-5">
                            <h2 class="display-4" id="subtitulo">¡Alertas!</h2>
                            <p id="caracteristicas">En UbiCov puedes alertar a las personas de no acceder a algún sitio para protegerlos solo al dar un clic.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 order-lg-2">
                        <div class="p-5"><img class="img-fluid" src="{{asset('/img/4.jpg')}}" alt="..." /></div>
                    </div>
                    <div class="col-lg-6 order-lg-1">
                        <div class="p-5">
                            <h2 class="display-4" id="subtitulo">Lugares</h2>
                            <p id="caracteristicas">Puedes ingresar a UbiCov a ver que lugares son propensos a que te contagies.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="p-5"><img class="img-fluid " src="{{asset('/img/5.jpg')}}" alt="..." /></div>
                    </div>
                    <div class="col-lg-6">
                        <div class="p-5">
                            <h2 class="display-4" id="subtitulo">Simbología</h2>
                            <p id="caracteristicas">En UbiCov podrás encontrar una simbología simple para que sea fácil de recordar.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 order-lg-2">
                        <div class="p-5"><img class="img-fluid" src="{{asset('/img/6.jpg')}}" alt="..." /></div>
                    </div>
                    <div class="col-lg-6 order-lg-1">
                        <div class="p-5">
                            <h2 class="display-4" id="subtitulo">APP</h2>
                            <p id="caracteristicas">Usa la App de UbiCov y tendrás la información mas precisa, ¡Cuídate y cuídanos!</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
       
@endsection