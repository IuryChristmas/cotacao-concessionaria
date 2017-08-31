@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @if(Session::has('msg'))
                    <div class="{{ Session::get('class') }}">{{Session::get('msg')}}</div>
                @endif

                <div class="panel panel-default">
                    <ol class="breadcrump panel-heading">
                        <li class="active">Histórico de Cotações</li>
                    </ol>

                    <div class="panel-body">

                        <table class="table table-bordered" >
                            <thead>
                            <tr>
                                <th>Data e Hora</th>
                                <th>Nome do Cliente</th>
                                <th>Seguradora</th>
                                <th>Valor</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($cotacoes as $cotacao)
                                <tr>
                                    <th scope="row" >{{ $cotacao->data_hora }}</th>
                                    <td>{{ $cotacao->nome }}</td>
                                    <td>{{ $cotacao->seguradora }}</td>
                                    <td>{{ $cotacao->valor }}</td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection