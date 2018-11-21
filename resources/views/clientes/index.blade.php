@extends('layouts.layout')
@section('content')
    <head>
        <title>Clientes</title>
    </head>
    <div class="row">
        <section class="content">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="pull-left"><h3>Listado Clientes</h3></div>
                        <div class="pull-right">
                            <div class="btn-group">
                                <a href="{{ route('cliente.create') }}" class="btn btn-info" >Ingresar Cliente</a>
                            </div>
                        </div>
                        <div class="table-container">
                            <table id="mytable" class="table table-bordred table-striped">
                                <thead>
                                <th>Nombre del Cliente</th>
                                <th>Teléfono</th>
                                <th>E-mail</th>
                                </thead>
                                <tbody>
                                @if($clientes->count())
                                    @foreach($clientes as $cliente)
                                        <tr>
                                            <td>{{$cliente->nombre_cliente}}</td>
                                            <td>{{$cliente->telefono}}</td>
                                            <td>{{$cliente->email}}</td>
                                            <td><a class="btn btn-primary btn-xs" href="{{action('ClienteController@edit', $cliente->id)}}" ><span class="glyphicon glyphicon-pencil"></span></a></td>
                                            <td>

                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="8">No existen datos</td>
                                    </tr>
                                @endif
                                </tbody>

                            </table>
                            <div class="links">
                                <td><a class="btn btn-primary btn-xs" href="/">Menú Principal</a></td>
                            </div>
                        </div>
                    </div>
                    {{ $clientes->links() }}
                </div>
            </div>
        </section>
    </div>
@endsection
