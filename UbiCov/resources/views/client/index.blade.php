@extends('client.layouts.main')
<link href="{{asset('/dash/css/estilos.css')}}" rel="stylesheet" />

@section('contenido')
<header class="masthead text-center text-white">
            <div class="masthead-content">
                <div class="container">
                    <h1><img src="{{asset('/img/logoof.png')}}" alt="..." /> </h1>
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
                            <h2 class="display-4">Inicio de Sesión</h2>
                            <p> En caso de ser miembro de UbiCov puedes acceder solo al dar clic en "Iniciar Sesión"</p>
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
                            <h2 class="display-4">¿Aún no eres miembro de UviCov?</h2>
                            <p>Si aún no eres miembro de UbiCov ¡Corre a Registrarte! como empresa o persona</p>
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
                            <h2 class="display-4">¡Alertas!</h2>
                            <p>En UbiCov puedes alertar a las personas de no acceder a algún sitio para protegerlos solo al dar un clic</p>
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
                            <h2 class="display-4">Lugares</h2>
                            <p>Puedes ingresar a UbiCov a ver que lugares son propensos a que te contagies</p>
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
                            <h2 class="display-4">Simbología</h2>
                            <p>En UbiCov podras encontrar una simbología simple para que sea facíl de recordar</p>
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
                            <h2 class="display-4">APP</h2>
                            <p>Usa la App de UbiCov y tendras la información mas precisa, ¡Cuidate y cuidanos!</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
       
@endsection