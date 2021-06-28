@extends('admin.layouts.main')

@section('contenido')
<h2>MAPA</h2>
<div class="row">
<div class="col-md-6.5">
 <div class="card card-chart">
<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d13764.47726746174!2d-107.91764275!3d30.404356449999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2smx!4v1624855575187!5m2!1ses!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</div>
</div>
<div class="col-md-5">
 <div class="card card-chart">
 <div class="card-header card-header-tabs card-header-primary">
 <h4 class="card-title" >Mapa informativo sobre Covid-19:</h4>
 <p>-Casos confirmados.</p>
 <p>-Zonas de mayor riesgo.</p>
 <p>-Zonas de riesgo intermedio.</p>
 <p>-Zonas de menor riesgo.</p>
 <p>-Zonas sanitizadas.</p>
 <p>-Zonas no sanitizadas.</p>
 <p>-Zonas de ayuda.</p>
</div>
</div>
</div>
@endsection

@section('scripts')
    <script>console.log("NEGOCIOS")</script>
@endsection