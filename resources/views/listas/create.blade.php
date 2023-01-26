@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row align-items-center">
        <div class="col-md-12">
            <h6><strong>INSERIR CONVIDADOS DA FORMATURA:</strong> {{$form->titulo}}</h6>
        </div>
    </div>
    <hr>
        <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Cadastro de convidados</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('listas.store') }}">
                            @csrf

                        <div class="row">
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label for="autoridades">Procure pela Autoridade cadastrada para precedência</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fab fa-searchengin"></i></div>
                                        </div>
                                            <input class="form-control" list="auts" id="autoridad" name="autoridade" placeholder="Pesquisa automática de autoridade"  autocomplete="off">
                                    </div>
                                </div>
                            </div>
                            @php
                                $auts = DB::table('autoridades')->get();
                            @endphp
                            <datalist id="auts">
                                @foreach($auts as $a)
                                    <option value="{{$a->posto}}">
                                @endforeach
                            </datalist>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="posto">Procure pelo Posto cadastrado</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fab fa-searchengin"></i></div>
                                        </div>
                                            <input class="form-control" list="posts" id="postos" name="posto" placeholder="Pesquisa automática de postos"  autocomplete="off">
                                    </div>
                                </div>
                            </div>
                            @php
                                $postos = DB::table('postos')->get();
                            @endphp
                            <datalist id="posts">
                                <option value="----> Marinha <----" >
                                @foreach($postos as $p)
                                    <option value="{{$p->marinha}}">
                                @endforeach
                                <option value="----> Exército <----" >
                                @foreach($postos as $p)
                                    <option value="{{$p->exercito}}">
                                @endforeach
                                <option value="----> Aeronáutica <----" >
                                @foreach($postos as $p)
                                    <option value="{{$p->aeronautica}}">
                                @endforeach
                                    <option value="Civil">
                            </datalist>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="quadro">Quadro</label>
                                    <input type="text" class="form-control" id="quadro" name="quadro" placeholder="Ex.: QOAV">
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label for="nome_completo">Nome Completo</label>
                                    <input type="text" class="form-control" id="nome_completo" name="nome_completo">
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="nome_guerra">Nome de Guerra</label>
                                    <input type="text" class="form-control" id="nome_guerra" name="nome_guerra">
                                </div>
                            </div>
                            <div class="col-md-3">
                                @php
                                    $titulos = DB::table('titulos')->get();
                                @endphp
                                <div class="form-group">
                                    <label for="nome_completo">Título</label>
                                    <select class="form-control" id="titulo" name="titulo">
                                    @foreach($titulos as $t)
                                      <option>{{$t->titulo}}</option>  
                                    @endforeach
                                    </select>
                                  </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="rep">Representação</label>
                                    <input type="checkbox" class="form-check" id="rep">
                                </div>
                            </div>
                        </div>

                        <div id="representante">
                            <hr>
                            
                        </div>
                        
                        <input type="hidden" name="formatura" value="{{$form->id}}">
                        <input type="hidden" name="precedencia" value="{{$form->id}}">

                        <div class="form-group row mb-0">
                            <div class="col-md-7 offset-md-5">
                                <button type="submit" class="btn btn-primary">
                                    Publicar
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
