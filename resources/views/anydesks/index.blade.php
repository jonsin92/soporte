@extends('layouts.layout')
@section('content')
    <head>
        <title>Conexión AnyDesk</title>
    </head>
    <div class="row">
        <section class="content">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="pull-left"><h3>Conexiones AnyDesk</h3></div>
                        <div class="pull-right">
                            <div class="btn-group">
                                <a href="{{ route('anydesk.create') }}" class="btn btn-info" >Ingresar Nueva Conexión</a>
                            </div>
                        </div>
                        <div class="table-container">
                            <table id="mytable" class="table table-bordred table-striped">
                                <thead>
                                <th>Nombre del Cliente</th>
                                <th>ID de Conexión</th>
                                </thead>
                                <tbody>
                                @if($anydesks->count())
                                    @foreach($anydesks as $anydesk)
                                        <tr>
                                            <td>{{$anydesk->cliente_id}}</td>
                                            <td>{{$anydesk->direccion}}</td>
                                            <td><a class="btn btn-primary btn-xs" href="{{action('AnydeskController@edit', $anydesk->id)}}" ><span class="glyphicon glyphicon-pencil"></span></a></td>
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
                                <td><a class="btn btn-primary btn-xs" href="/">Menu Principal</a></td>
                            </div>
                        </div>
                    </div>
                    {{ $anydesks->links() }}
                </div>
            </div>
        </section>
    </div>
@endsection
