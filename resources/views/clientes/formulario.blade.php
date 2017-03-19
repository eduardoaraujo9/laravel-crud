@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Dados do novo cliente
                        <a class="pull-right" href="{{ url('clientes') }}">Lista cliente</a>
                    </div>

                    <div class="panel-body">
                        @if(Session::has('mensagem_sucesso'))
                            <div class="alert alert-success">{{ Session::get('mensagem_sucesso') }}</div>
                        @endif
                        @if(Request::is('*/editar'))
                            {!! Form::model($cliente, ['method' => 'PATCH', 'url' => url('clientes/' . $cliente->id)]) !!}
                        @else
                            {!! Form::open(['url' => url('clientes/salvar')]) !!}
                        @endif
                        {!! Form::label('nome','Nome') !!}
                        {!! Form::input('text', 'nome', null, ['class' => 'form-control', 'autofocus', 'placeholder' => 'Nome do cliente']) !!}
                        {!! Form::label('endereco','Endereço') !!}
                        {!! Form::input('text', 'endereco', null, ['class' => 'form-control', 'placeholder' => 'Endereço do cliente']) !!}
                        {!! Form::label('numero','Numero') !!}
                        {!! Form::input('text', 'numero', null, ['class' => 'form-control', 'placeholder' => 'Numero do cliente']) !!}
                        {!! Form::submit('Salvar',['class' => 'btn btn-primary']) !!}
                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection