@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row align-items-center">
        <div class="col-md-2">
            <img src="/imagens/ingresso.png" width="80px" height="70px">        
        </div>
        <div class="col-md-10">
            <h2>LISTA DE PRECEDÊNCIA DE AUTORIDADES</h2>
        </div>
    </div>
    <hr>
    <h6>Fonte: Normas do Cerimonial Público e a Ordem Geral de Precedência - TCE/MS</h6>
    <table id="autoridades" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Posto / Cargo</th>
                <th>Precedência</th>
            </tr>
        </thead>
        <tbody>
            @foreach($precedencias as $l)
                <tr>
                    <td>{{$l->posto}}</td>
                    <td>{{$l->sequencia_interna}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
