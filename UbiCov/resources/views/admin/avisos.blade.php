@extends('admin.layouts.main')

@section('contenido')
<div class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
            <h2>AVISOS</h2>
            </div><!-- /.col -->
            <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item">
                          <a class="btn btn-outline-primary" target="_blank" href="/admin/PDFaviso">
                            <i class="fa fa-print"></i>  
                            Reporte
                          </a>
                </li>
                <li class="breadcrumb-item">
                    <button class="btn btn-outline-primary" data-toggle="modal" data-target="#modal-add">
                       <i class="fa fa-plus"></i> Agregar Aviso</button>
                </li>
                
            </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

<div class="row">
@if($message = Session::get('Listo'))
                <div class="alert alert-success alert-dismissable fade show col-12" role="alert">
                    <h5>Listo</h5>
                    <p>{{$message}}</p>
                </div>
        @endif
            <div class="col-lg-12 col-md-12">
              <div class="card">
                <div class="card-header card-header-tabs card-header-primary">
                  <div class="nav-tabs-navigation">
                    <div class="nav-tabs-wrapper">
                      <span class="nav-tabs-title">Avisos:</span>
                      <ul class="nav nav-tabs" data-tabs="tabs">
                        <li class="nav-item">
                          <a class="nav-link active" href="#profile" data-toggle="tab">
                             Todos
                            <div class="ripple-container"></div>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <div class="tab-content">
                    <div class="tab-pane active" id="profile">
                    <table class='table'>
                      <thead>
                      <tr>
                        <th>Título</th>
                        <th>Aviso</th>
                        <th></th>
                      </tr>
                      </thead>
                      <tbody>
                      @foreach($avisos as $p)
                        <tr>
                        <td>{{  $p->titulo  }}</td>
                        <td>{{  $p->aviso  }}</td>
                        <td>
                            <button class="btn  btn-danger  btnEliminar" data-id="{{  $p->id  }}"
                            data-toggle="modal" data-target="#modal-delete">
                            <i class="fa fa-trash"></i>
                            </button>
                                  <form action="{{ url('/admin/avisos', ['id'=>$p->id]) }}" method="POST"
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
              </div>
            </div>

<div class="modal fade" id="modal-add">
   <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title"> Agregar Aviso </h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="/admin/avisos"  method="POST">
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
         <label for="titulo">Título</label>
         <input type="text" class="form-control form-control-border" id="titulo" name="titulo" value="{{ @old('titulo') }}">
         </div>
         <div class="from-group">
         <label for="aviso">Aviso</label>
         <textarea class="form-control form-control-border" id="aviso" name="aviso" rows="4" value="{{ @old('aviso') }}"></textarea>
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
        <h4 class="modal-title"> Eliminar Aviso </h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
          </button>
        </div>
        
        <div class="modal-body">
        <h2 class="h5">¿Está seguro de que desea eliminar el aviso?</h2>
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
</script>
@endsection