@extends('admin.layouts.main')

@section('contenido')

<div class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
            <h2>NEGOCIOS REGISTRADOS</h2>
            </div><!-- /.col -->
            <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item">
                <a class="btn btn-outline-primary btn_sm" target="_blank" href="/admin/PDFnegocio">
                  <i class="fa fa-print"></i>Reporte</a>
                </li>
                <li class="breadcrumb-item">
                    <button class="btn btn-outline-primary btn-sm" data-toggle="modal" data-target="#modal-add">
                       <i class="fa fa-plus"></i> Agregar Negocio</button>
                </li>
                
            </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
<div class="content">
   <div class="container-fluid">
   <div class="row">
   @if($message= Session::get('Listo'))
            <div class="alert alert-success alert-dismissable fade show col-12" role="alert">
            <h5>Listo</h5>
                  <p>{{ $message }} </p>
            </div>
        @endif
        <table class='table'>
        <thead>

        <tr>
           <th>Nombre</th>
           <th>Tipo</th>
           <th>Estado</th>
           <th>Ciudad</th>
           <th>Código postal</th>
           <th>Colonia</th>
           <th>Calle</th>
           <th>Número exterior</th>
           <th>Número interior</th>
           <th></th>
        </tr>
        </thead>
        <tbody>
        @foreach($empresas as $p)
           <tr>
           <td>{{  $p->nombre  }}</td>
           <td>{{  $p->tipo  }}</td>
           <td>{{  $p->estado  }}</td>
           <td>{{  $p->ciudad  }}<sc</td>
           <td>{{  $p->cp  }}</td>
           <td>{{  $p->colonia  }}</td>
           <td>{{  $p->calle  }}</td>
           <td>{{  $p->numExterior  }}</td>
           <td>{{  $p->numInterior  }}</td>
           <td>
              <button class="btn  btn-danger  btnEliminar" data-id="{{  $p->id  }}"
              data-toggle="modal" data-target="#modal-delete">
              <i class="fa fa-trash"></i>
              </button>
                     <form action="{{ url('/admin/usuarios', ['id'=>$p->id]) }}" method="POST"
                      id="formEliminar_{{  $p->id  }}">
                        @csrf
                        <input type="hidden" name="id" value="{{  $p->id  }}">
                        <input type="hidden" name="_method" value="delete">
                     </form>
            </td>
           </tr>
           @endforeach
        </tbody>
        </table>
        </div>
   </div>
</div>
   

<div class="modal fade" id="modal-add">
   <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title"> Agregar Negocio </h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="/admin/usuarios"  method="POST">
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
         <label for="nombre">Nombre</label>
         <input type="text" class="form-control form-control-border" id="nombre" name="nombre" value="{{ @old('nombre') }}">
         </div>
         <div class="from-group">
         <label for="tipo">Tipo</label>
         <input type="text" class="form-control form-control-border" id="tipo" name="tipo" value="{{ @old('tipo') }}">
         </div>
         <div class="from-group">
         <label for="estado">Estado</label>
         <input type="text" class="form-control form-control-border" id="estado" name="estado" value="{{ @old('estado') }}">
         </div>
         <div class="from-group">
         <label for="ciudad">Ciudad</label>
         <input type="text" class="form-control form-control-border" id="ciudad" name="ciudad" value="{{ @old('ciudad') }}">
         </div>
         <div class="from-group">
         <label for="cp">Código Postal</label>
         <input type="text" class="form-control form-control-border" id="cp" name="cp" value="{{ @old('cp') }}">
         </div>
         <div class="from-group">
         <label for="colonia">Colonia</label>
         <input type="text" class="form-control form-control-border" id="colonia" name="colonia" value="{{ @old('colonia') }}">
         </div>
         <div class="from-group">
         <label for="calle">Calle</label>
         <input type="text" class="form-control form-control-border" id="calle" name="calle" value="{{ @old('calle') }}">
         </div>
         <div class="from-group">
         <label for="numExterior">Número exterior</label>
         <input type="text" class="form-control form-control-border" id="numExterior" name="numExterior" value="{{ @old('numExterior') }}">
         </div>
         <div class="from-group">
         <label for="numInterior">Número interior</label>
         <input type="text" class="form-control form-control-border" id="numInterior" name="numInterior" value="{{ @old('numInterior') }}">
         </div>
         <div class="from-group">
         <label for="numInterior">Id usuario</label>
         <select class="input-large form-control form-control-border" id="combo" name="combo" onchange="ShowSelected();">
              <option selected="selected" disabled="true">Elige un usuario:</option>
              @foreach($user as $u)
              <option value="{{$u->id}}" name="id_user_{{$u->id}}">{{$u->name}}</option>
              @endforeach
        </select>
         <input type="hidden" class="form-control form-control-border" id="id_user" name="id_user" value="{{ @old('id_user') }}">
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
        <h4 class="modal-title"> Eliminar Negocio </h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
          </button>
        </div>
        
        <div class="modal-body">
        <h2 class="h5">¿Está seguro de que desea eliminar el registro del negocio?</h2>
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

    function ShowSelected()
      {
      /* Para obtener el valor */
      var cod = document.getElementById("combo").value;
      $("#id_user").val(cod);
      }
    
    </script>
@endsection