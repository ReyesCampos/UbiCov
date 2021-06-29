@extends('admin.layouts.main')

@section('contenido')
<!-- Content Header (Page header) -->

<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          <h3> Semáforo Covid-19 </h3>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <button class="btn btn-outline-primary btn_sm" data-toggle="modal" data-target="#modal-add">
                <i class="fa fa-plus"></i>  
                Agregar un semáforo
              </button>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

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


  <div class="modal fade" id="modal-add">
   <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title"> Agregar Semáforo </h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="/admin/semaforizacion"  method="POST">
        @if($message= Session::get('errorInsert'))
            <div class="alert alert-danger alert-dismissable fade show col-12" role="alert">
            <h5>Error</h5>
            <ul>
             @foreach($errors->all() as $error)
                  <li> {{ $error }}</li>
             @endforeach
            </ul>
            </div>
        @endif
        @csrf
        
        <div class="modal-body">
         <div class="from-group">
         <label for="simbolo">Nombre</label>
         <input type="text" class="form-control form-control-border" id="simbolo" name="simbolo" value="{{ @old('simbolo') }}">
         </div>
         <div class="from-group colorpicker colorpicker-component" id="cp2">
         <label for="color">Color</label>
         <input type="text" value="#00AABB" class="form-control form-control-border" id="color" name="color" value="{{ @old('color') }}"> 
         <span class="input-group-addon"><i></i></span> 
         </div>
         <div class="from-group">
         <label for="leyenda">Leyenda</label>
         <input type="text" class="form-control form-control-border" id="leyenda" name="leyenda" value="{{ @old('leyenda') }}">
         </div>
           <div class="modal-footer  justify-content-between">
             <button type="button" class="btn btn-default"data-dismiss="modal">Cerrar</button>
             <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
         </form>
    </div>
</div>
</div>
</div>

@endsection

@section('scripts')
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-colorpicker/2.5.3/js/bootstrap-colorpicker.min.js"></script>
    <script>
        $('.colorpicker').colorpicker();
    </script>
@endsection
