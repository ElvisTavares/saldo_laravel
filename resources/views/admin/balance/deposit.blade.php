@extends('adminlte::page')

@section('title', 'Nova Recarga')

@section('content_header')
    <h1>Fazer recarga</h1>

    <ol class="breadcrumb">
        <li><a href="">Dashboard</a></li>
        <li><a href="">Saldo</a></li>
        <li><a href="">Depositar</a></li>
    </ol>
@stop

@section('content')
    <div class="box">
        <div class="box-header">
           <h3>Fazer recarga</h3>
        </div>

        <div class="col-lg-4 col-xs-6">
            <div class="box-body">
                <form action="POST" action=" {{ route('deposit.store') }}">
                    {!! csrf_field() !!}

                    <div class="form-group">
                        <input type="text" placeholder="Valor recarga" class="form-control">
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-sucess">Recarregar</button>
                    </div>
                </form>
            </div>
        </div>

@stop