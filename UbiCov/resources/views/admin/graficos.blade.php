@extends('admin.layouts.main')

@section('contenido')
<h2>GRÁFICOS</h2>

<div class="row">
            <div class="col-md-4">
              <div class="card card-chart">
                <div class="card-header card-header-tabs card-header-primary"">
                  <div class="ct-chart" id="dailySalesChart"></div>
                </div>
                <div class="card-body">
                  <h4 class="card-title">Incremento y decremento diario en casos de Covid-19</h4>
                  <p class="card-category">
                    <span class="text-success"><i class="fa fa-long-arrow-up"></i> 10% </span> Incremento diario</p>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">access_time</i> Actualizado hace 4 minutos
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card card-chart">
                <div class="card-header card-header-tabs card-header-primary"">
                  <div class="ct-chart" id="websiteViewsChart"></div>
                </div>
                <div class="card-body">
                  <h4 class="card-title">Informe mensual sobre casos de Covid-19</h4>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">access_time</i> Actualizado hace 4 minutos
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card card-chart">
                <div class="card-header card-header-tabs card-header-primary"">
                  <div class="ct-chart" id="completedTasksChart"></div>
                </div>
                <div class="card-body">
                  <h4 class="card-title">Estadísiticas de sanitización en negocios</h4>
                  <p class="card-category">Invrementos y decrementos</p>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">access_time</i> Actualizado hace 4 minutos
                  </div>
                </div>
              </div>
            </div>
          </div>
@endsection

@section('scripts')
                <script>console.log("NEGOCIOS")</script>  
@endsection