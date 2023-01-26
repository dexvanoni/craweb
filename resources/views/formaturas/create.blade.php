@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row align-items-center">
        <div class="col-md-2">
            <img src="/imagens/ingresso.png" width="80px" height="70px">        
        </div>
        <div class="col-md-12">
            <h2>INSERIR FORMATURA</h2>
        </div>
    </div>
    <hr>
        <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Criar nova Formatura na BACG</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('formaturas.store') }}">
                            @csrf

                        <div class="row">
                            <div class="col-md-4">
                                  <div class="form-group">
                                    <label for="responsavel_rp">Responsável</label>
                                    <select class="form-control" id="responsavel_rp" name="responsavel_rp">
                                    @php
                                        $usuarios = DB::table('users')->get();
                                    @endphp
                                        <option>Selecione...</option>
                                    @foreach($usuarios as $u)
                                        <option>{{$u->name}}</option>
                                    @endforeach
                                    </select>
                                  </div>
                            </div>
                            <div class="col-md-3">
                                 <label for="data">Data da Formatura</label><label style="color: red;">*</label>
                                  <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                      <div class="input-group-text"><i class="fas fa-sign-in-alt"></i></div>
                                    </div>
                                    <input type="date" class="form-control" name="data" id="data" required>
                                  </div>
                            </div>
                            <div class="col-md-3">
                                 <label for="hora">Hora</label><label style="color: red;">*</label>
                                  <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                      <div class="input-group-text"><i class="fas fa-clock"></i></div>
                                    </div>
                                    <input type="time" class="form-control" name="hora" id="hora" required>
                                  </div>
                            </div>
                            <div class="col-md-2">
                                  <div class="form-group">
                                    <label for="ns">NS</label>
                                    <input type="text" class="form-control" id="ns" name="ns">
                                  </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="titulo">Título (Evento)</label>
                                    <input type="text" class="form-control" id="titulo" name="titulo">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="local">Local da Formatura</label>
                                    <input type="text" class="form-control" id="local" name="local">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="cmt_tropa">Cmt. da Tropa</label>
                                    <input type="text" class="form-control" id="cmt_tropa" name="cmt_tropa">
                                </div>
                            </div>
                        </div>

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
