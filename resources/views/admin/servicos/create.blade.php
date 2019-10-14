@extends('layouts.appPainel')

@section('breadcrumb')
    <div class="row page-titles">
            <div class="col-md-5 col-8 align-self-center">
                <h3 class="text-themecolor">Faça seu anúncio!</h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ url('/servicos') }}">Serviços</a></li>
                    <li class="breadcrumb-item active">Anúncio</li>
                </ol>
            </div>
    </div>

@endsection

@section('content')
    <div class="row">
        <div class="col-lg-15">
            <div class="card">
                <div class="card-body">
                    <form class="form p-t-20" action="/servicos" method="post">
                        {{-- METODO PARA MANDAR AO SERVIDOR --}}
                        @csrf
                        <div class="form-group-row">
                            {{-- NOME SERVICO --}}
                            <div class="col-sm-6">
                                    <label for="nome">Nome do Serviço</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">
                                                <i class="ti-home"></i>
                                            </span>
                                        </div>
                                        <input type="text" class="form-control @error('nome') is-invalid @enderror " id="nome" name="nome" placeholder="Av, Rua...">
                                        @error('nome')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                            </div>
                            {{-- DESCRICAO SERVICO  --}}
                            <div class="col-sm-6">
                                <label for="descricao">Descrição do Serviço</label>
                                <!-- Ícone do bonequinho. trocar por <i class="far fa-comment-alt"></i>     daqui:  https://fontawesome.com/icons/comment-alt?style=regular -->
                                <!-- <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">
                                        <i class="far fa-comment-alt"></i>                                
                                    </span>
                                </div> -->
                                <input type="text" class="form-control @error('descricao') is-invalid @enderror " id="descricao" name="descricao" placeholder="Descrição">
                                @error('descricao')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                            </div>
                        </div>
                            
                        <div class="form-group row">
                            {{-- ENDERECO SERVICO --}}
                            <div class="col-sm-6">
                                <label for="endereco">Endereço</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">
                                            <i class="ti-home"></i>
                                        </span>
                                    </div>
                                    <input type="text" class="form-control @error('endereco') is-invalid @enderror " id="endereco" name="endereco" placeholder="Av, Rua...">
                                    @error('endereco')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            {{-- NUMERO --}}
                            <div class="col-sm-2">
                                <label for="numero">N°</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">
                                            <i class="ti-home"></i>
                                        </span>
                                    </div>
                                    <input type="text" class="form-control" id="numero" name="numero" placeholder="N°">
                                </div>
                            </div>
                            {{-- COMPLEMENTO --}}
                            <div class="col-sm-4">
                                <label for="complemento">Complemento</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">
                                            <i class="ti-home"></i>
                                        </span>
                                    </div>
                                    <input type="text" class="form-control" id="complemento" name="complemento" placeholder="Ap, BL, Cj...">
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            {{-- DATA --}}
                            <div class="col-sm-6">
                                    <label for="data">DATA:</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">
                                                <i class="ti-email"></i>
                                            </span>
                                        </div>
                                        <input type="date" class="form-control @error('data') is-invalid @enderror " id="data" name="data" placeholder="Horário de início:">
                                        @error('data')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            {{-- HORARIO INICIO --}}
                            <div class="col-sm-6">
                                <label for="horaInicial">Horário de início:</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">
                                            <i class="ti-email"></i>
                                        </span>
                                    </div>
                                    <input type="time" step="1" class="form-control @error('horaInicial') is-invalid @enderror " id="horaInicial" name="horaInicial" placeholder="Horário de início:">
                                    @error('horaInicial')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-6">
                                {{-- HORARIO FINAL --}}
                                <label for="horaFinal">Horário de término:</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">
                                            <i class="ti-email"></i>
                                        </span>
                                    </div>
                                    <input type="time" step="1" class="form-control @error('horaFinal') is-invalid @enderror" id="horaFinal" name="horaFinal" placeholder="Horário de término:">
                                    @error('horaFinal')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        {{-- INPUT ID_USUARIO --}}
                            <input type="hidden" name="id_dono" id="id_dono" value="{{ Auth::id }}">
                    
                        <div class="form-group">
                            <button type="submit" name="anunciar" class="btn btn-success waves-effect waves-light m-r-10">Anunciar</button>
                            <button type="submit" name="cancelar" class="btn btn-inverse waves-effect waves-light">Cancelar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection






