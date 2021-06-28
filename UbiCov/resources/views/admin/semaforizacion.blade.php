@extends('admin.layouts.main')

@section('contenido')
<h2>SEMAFORIZACIÓN</h2>
<h3> Semáforo Covid-19 </h3>
<div class="row">
            <div class="col-md-3">
              <div class="card card-chart">
                <div class="card-header card-header" style="background-color:#ff0000">
                </div>
                <div class="card-body">
                  <h3 class="card-title">Rojo</h3>
                  <p> No salgas si no es estrictamente necesario.</p>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card card-chart">
                <div class="card-header card-header" style="background-color:#ff9933">
                </div>
                <div class="card-body">
                <h3 class="card-title">Naranja</h3>
                  <p> Si puedes, quédate en casa.</p>
                  <p></p>
                </div>
              </div>
              </div>
              <div class="col-md-3">
              <div class="card card-chart">
                <div class="card-header card-header" style="background-color:#ffff00">
                </div>
                <div class="card-body">
                <h3 class="card-title">Amarillo</h3>
                  <p> Hay más actividades pero con precaución.</p>
                </div>
              </div>
              </div>
              <div class="col-md-3">
              <div class="card card-chart">
                <div class="card-header card-header" style="background-color:#00ff00">
                </div>
                <div class="card-body">
                <h3 class="card-title">Verde</h3>
                  <p> Podemos salir pero con precaución y prevención.</p>
                  <p>  </p>
                </div>
              </div>
              </div>
              </div>
<h3> Verifica en qué color del semáforo se encuentra tu estado </h3>
<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d14835177.864905937!2d-105.10514274999997!3d24.79991847363672!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2smx!4v1624858928888!5m2!1ses!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

@endsection

@section('scripts')
    <script>console.log("NEGOCIOS")</script>


@endsection