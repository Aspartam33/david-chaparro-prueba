@extends('adminlte::page')

@section('title', 'Empleados')

@section('content_header')
<h1>
   Empleados
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-import-file">
        Importar empleados.
    </button>
</h1>
@stop

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Listado de Empleados</h3>
                </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="employees" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nombre</th>
                            <th>Apellidos</th>
                            <th>Nacionalidad</th>
                            <th>Fecha de contratación</th>
                            <th>Genero</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($data as $row )
                        <tr>
                          
                            <td>{{ $row->id }}</td>
                            <td>{{ $row->name }}</td>
                            <td>{{ $row->surname }}</td>
                            <td>{{ $row->nationality }}</td>
                            <td>{{ $row->hiring_date }}</td>
                            <td>{{ $row->gender }}</td>
                            
                            

                            
                        </tr>
                            
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                             <th>#</th>
                            <th>Nombre</th>
                            <th>Apellidos</th>
                            <th>Nacionalidad</th>
                            <th>Genero</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
            <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</div>

<<!-- modal -->
<div class="modal fade" id="modal-import-file">
    <div class="modal-dialog">
        <div class="modal-content bg-default">
            <div class="modal-header">
                <h4 class="modal-title">Añadir archivo</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
            </div>
           
            <form action="{{route('admin.employees.import')}}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="modal-body">
               
               <div class="form-group">
                   <label for="name">Import</label>
                   <input  type="file" name="file" class="form-control" id="file">
               </div>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-outline-light" data-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-outline-primary">Subir</button>
            </div>
            </form>
        </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
<!-- modal eliminar-->

<!-- /.modal -->
@stop
@section('js')
<script>
$(document).ready(function() {
    $('#employees').DataTable( {
        "order": [[ 3, "desc" ]]
    } );
} );
</script>
@stop