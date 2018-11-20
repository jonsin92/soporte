@extends('layouts.layout')
@section('content')
    <head>
        <title>Ingreso nuevo requerimiento</title>
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
                        <h3 class="panel-title"></h3>
                        <div class="btn-group">
                            Ingreso de Requerimientos
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="table-container">
                            <form method="POST" action="{{ route('requerimiento.store') }}"  role="form">
                                {{ csrf_field() }}
                                <div class="row">
                                    <div class="col-xs-6 col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="cliente" id="cliente" class="form-control input-sm" placeholder="Nombre Cliente">
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
                <input type="text" name="estado" id="estado" class="form-control input-sm" placeholder="Estado">

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <input type="submit"  value="Guardar" class="btn btn-success btn-block">
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
