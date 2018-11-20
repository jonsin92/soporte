@extends('layouts.layout')
@section('content')
    <head>
        <title>Requerimientos</title>
    </head>
    <div class="row">
        <section class="content">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="pull-left"><h3>Requerimientos Actuales</h3></div>
                        <div class="pull-right">
                            <div class="btn-group">
                                <a href="{{ route('requerimiento.create') }}" class="btn btn-info" >Ingresar Requerimiento</a>
                            </div>
                        </div>
                        <div class="table-container">
                            <table id="mytable" class="table table-bordred table-striped">
                                <thead>
                                <th>Nombre del Cliente</th>
                                <th>Requerimiento</th>
                                <th>Fecha de Ingreso</th>
                                <th>Estado del Requerimiento</th>
                                </thead>
                                <tbody>
                                @if($requerimientos->count())
                                    @foreach($requerimientos as $requerimiento)
                                        <tr>
                                            <td>{{$requerimiento->cliente}}</td>
                                            <td>{{$requerimiento->requerimiento}}</td>
                                            <td>{{$requerimiento->fecha_ingreso}}</td>
                                            <td>{{$requerimiento->estado}}</td>
                                            <td><a class="btn btn-primary btn-xs" href="{{action('RequerimientoController@edit', $requerimiento->id)}}" ><span class="glyphicon glyphicon-pencil"></span></a></td>
                                            <td>

                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="8">No hay registro !!</td>
                                    </tr>
                                @endif
                                </tbody>

                            </table>
                            <div class="links">
                                <td><a class="btn btn-primary btn-xs" href="/">Menu Principal</a></td>
                            </div>
                        </div>
                    </div>
                    {{ $requerimientos->links() }}
                </div>
            </div>
        </section>
    </div>
@endsection
