@extends('layouts.layout')
@section('content')
    <head>
        <title>Edición requerimiento</title>
    </head>
    <div class="row">
        <section class="content">
            <div class="col-md-8 col-md-offset-2">
                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <strong>Error!</strong> Revise los campos obligatorios<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @if(Session::has('success'))
                    <div class="alert alert-info">
                        {{Session::get('success')}}
                    </div>
                @endif

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Editar Requerimiento</h3>
                    </div>
                    <div class="panel-body">
                        <div class="table-container">
                            <form method="POST" action="{{ route('requerimiento.update',$requerimiento->id) }}"  role="form">
                                {{ csrf_field() }}
                                <input name="_method" type="hidden" value="PATCH">
                                <div class="row">
                                    <div class="col-xs-6 col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="cliente_id" id="cliente_id" class="form-control input-sm" placeholder="Nombre Cliente">
                                            <!-- Hay que hacer que muestre los clientes ingresados (lista desplegable) -->
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="requerimiento" id="requerimiento" class="form-control input-sm" placeholder="Requerimiento">
                                        </div>
                                    </div>
                                </div>
                                <input type="date" name="fecha_ingreso" id="fecha_ingreso" class="form-control input-sm" placeholder="Fecha de Ingreso">
                        </div>
                    </div>
                </div>
                <input type="text" name="estado_id" id="estado_id" class="form-control input-sm" placeholder="Estado">
                <!-- Hay que hacer que muestre la lista de estados (lista desplegable) -->



                <div class="col-xs-12 col-sm-12 col-md-12">
                    <input type="submit"  value="Actualizar" class="btn btn-success btn-block">
                    <a href="{{ route('requerimiento.index') }}" class="btn btn-info btn-block" >Atrás</a>
                </div>

            </div>
            </form>
    </div>
    </div>

    </div>
    </div>
    </section>
@endsection
