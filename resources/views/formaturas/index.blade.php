@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row align-items-center">
        <div class="col-md-2">
            <img src="/imagens/ingresso.png" width="80px" height="70px">        
        </div>
        <div class="col-md-12">
            <h2>LISTA DE FORMATURAS</h2>
        </div>
    </div>
    <hr>
    <table id="formaturas" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Responsável</th>
                <th>Data Formatura</th>
                <th>Título</th>
                <th>NS</th>
                <th>Local</th>
                <th>Cmt. Tropa</th>
                <th>Criação</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($formaturas as $l)
                <tr>
                    <td>{{$l->responsavel_rp}}</td>
                    <td>{{date('d/m/Y', strtotime($l->data))}} às {{$l->hora}}</td>
                    <td>{{$l->titulo}}</td>
                    <td>{{$l->ns}}</td>
                    <td>{{$l->local}}</td>
                    <td>{{$l->cmt_tropa}}</td>
                    <td>{{date('d/m/Y H:i', strtotime($l->created_at))}}</td>
                    <td>
                        <a title="Preencher lista de convidados" href="{{ route('listas.convidados', [$l->id]) }}">
                                <i class="fas fa-clipboard-list" style="color: green"></i>
                        </a>
                        <a title="Lista de Convidados desta formatura" href="{{ route('listas.show', [$l->id]) }}">
                                <i class="fas fa-user-check" style="color: blue"></i>
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
