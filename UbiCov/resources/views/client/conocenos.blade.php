@extends('client.layouts.main')
<link href="{{asset('/dash/css/estilos.css')}}" rel="stylesheet" />

@section('contenido')

<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{asset('/img/prueba.jpg')}}" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="..." class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="..." class="d-block w-100" alt="...">
    </div>
  </div>
</div>

<p></p>
<p></p>
<p></p>
    <h1 id="seccion1-title">Conoce más</h1>
    
    <p class="card-text" id="seccion2">¿Quiénes somos?</p>
    <p class="card-text" id="seccion3" style="text-align: justify">Nosotros creemos que el cuidar de la salud y bienestar de nuestros seres queridos es una prioridad. </p>
    <p class="card-text" id="seccion3" style="text-align: justify">
    Por lo cual hemos creado esta pequeña organización llamada "FiveDevs" dedicada a dar 
    posibles soluciones a los problemas que se presentan debido al COVID-19.
    </p>
    <p class="card-text" id="seccion3" style="text-align: justify">
    Somos una organización que se preocupa por el bienestar y salud de la humanidad, queremos cuidar y ayudar a prevenir más contagios de COVID-19.
    Al compartir tu ubicación te alertamos de posibles riegos de contagio en lugares que fueron frecuentados por dicho virus.
    </p>
    <p class="card-text" id="seccion3" style="text-align: justify">
    Te invitamos a que pruebes nuestra app y comiences a cuidar de ti y de los tuyos porque "Tu ubicación nos protege a todos".  
  </p>
<div class="container">
    <div class="row">
            <div class="card col" style="width: 10rem;">
                <img src="{{asset('/img/medidas.jpg')}}" class="card-img-top" alt="...">
                 <div class="card-body">
                     <p class="card-text" style="text-align: justify">
                    Te recordamos seguir las medidas de salubridad: Lavado frecuente de manos, tomar tu sana distancia de al menos 1.5 mts, uso de gel antibacterial, uso correcto del cubrebocas y al toser o 
                    estornudar, cúbrete con el antebrazo.
                    </p>
                </div>
            </div>
            <div class="card col-5" style="width: 10rem;" >
                <img src="{{asset('/img/Slogan.png')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text" style="text-align: justify">Asegura tu salud y la de tus seres queridos evitando visitar lugares de riesgo al contagiarse de COVID-19. Prueba nuestra app ahora.</p>
                </div>
            </div>
            <div class="card col" style="width: 10rem;">
                <img src="{{asset('/img/itsncg.png')}}" class="card-img-top" alt="itsncg" >
                 <div class="card-body">
                     <p class="card-text" style="text-align: justify">Instituto Tecnologico Superior de Nuevo Casas Grandes, Chihuahua, Mex. Miembros: Judith Cabral, Alejandra Muñoz, Aneth Ochoa, María Reyes, Luisa Sandoval.</p>
                </div>
            </div>
            
    </div>

</div>

</div>

@endsection