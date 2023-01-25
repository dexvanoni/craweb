@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <img src="imagens/ingresso.png" width="300px" height="300px">
    </div>
    <div class="row justify-content-center">
        <h4>SIS-ComRecep</h4>
    </div>

    <hr>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="row justify-content-center">
                        Bem vindo ao Sistema de Rotinas da Comissão de Recepção de Autoridades da BACG <br>
                    </div>
                    <div class="row justify-content-center">
                        Utilize o menu lateral
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
