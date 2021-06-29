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
            <li class="breadcrumb-item">
                <a class="btn btn-outline-primary " target="_blank" href="/admin/PDFsemaforo">
                  <i class="fa fa-print"></i>Reporte</a>
                </li>
                <li class="breadcrumb-item">
              <button class="btn btn-outline-primary btn_sm" data-toggle="modal" data-target="#modal-add">
                <i class="fa fa-plus"></i>  
                Agregar un semáforo
              </button>
              </li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
        <div class="row">
   @if($message= Session::get('Listo'))
            <div class="alert alert-success alert-dismissable fade show col-12" role="alert">
            <h5>Listo</h5>
                  <p>{{ $message }} </p>
            </div>
        @endif
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

<div class="row">
          @foreach($simbologias as $s)
            <div class="col-md-3">
              <div class="card card-chart">
                <div class="card-header card-header" style="background-color:{{  $s->color  }}" >
                    <button class="btn btnEliminar float-right" data-id="{{  $s->id  }}" data-toggle="modal" data-target="#modal-delete"
                      style="background-color:transparent; heigth: 10%; width: 10%">
                      <i class="fa fa-minus"></i>
                    </button>
                        <form action="{{ url('/admin/semaforizacion', ['id'=>$s->id]) }}" method="POST"
                          id="formEliminar_{{  $s->id  }}">
                            @csrf
                            <input type="hidden" name="id" value="{{  $s->id  }}">
                            <input type="hidden" name="_method" value="delete">
                        </form>
                </div>
                <div class="card-body">
                  <h3 class="card-title">{{  $s->simbolo  }}</h3>
                  <p> {{  $s->leyenda  }}</p>
                </div>
              </div>
            </div>
          @endforeach
            
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
         <div class="form-group">
         <label for="color" class="form-label">Color</label>
         <div class="form-group row">
         <input type="text" class="form-control form-control-border col-11" value="" id="color" name="color" value="{{ @old('color') }}">
         <input type="color" class="form-control form-control-color col-1" onchange="ShowSelected();" id="picker" name="picker" value="#563d7c" title="Selecciona el color">
         </div>
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
<div class="modal fade" id="modal-delete">
   <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title"> Eliminar Semáforo </h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
          </button>
        </div>
        
        <div class="modal-body">
        <h2 class="h5">¿Está seguro de que desea eliminar el registro del semáforo?</h2>
        </div>

           <div class="modal-footer  justify-content-between">
             <button type="button" class="btn btn-default"data-dismiss="modal">Cerrar</button>
             <button type="button" class="btn btn-danger btnCloseEliminar">Eliminar</button>
        </div>
        
      </div>
    </div>
  </div>
</div>
@endsection

@section('scripts')
<script>
function ShowSelected()
      {
      /* Para obtener el valor */
      var col = document.getElementById("picker").value;
      $("#color").val(col);
      }
</script>
<script> 
    var idEliminar=-1;
    $(document).ready(function(){
        @if($message= Session::get('errorInsert'))
        $("#modal-add").modal('show');
        @endif

        $(".btnEliminar").click(function(){
           var id=$(this).data('id');
           idEliminar=id;
        });
        $(".btnCloseEliminar").click(function(){
             $("#formEliminar_"+idEliminar).submit();
        });
    });
    
    </script>

@endsection
