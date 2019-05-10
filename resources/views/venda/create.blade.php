@extends('base')

@section("content")
    <div class="row">
        <div class="col-lg-12">
            <div class="view-header">
                <div class="header-icon">
                    <i class="pe page-header-icon pe-7s-user"></i>
                </div>
                <div class="header-title">
                    <h3 class="m-b-xs">Cadastro de Vendas</h3>
                </div>
            </div>
            <hr>
        </div>
    </div>
    {!! Form::open(["url" => url('/') . "/vendas", "method" => "POST", "id" => "form", "role" => "form"]) !!}
        @include('venda.includes.form')
    {!! Form::close() !!}
@stop