@extends('layouts.appPainel')

@section('breadcrumb')
<div class="row page-titles">
        <div class="col-md-5 col-8 align-self-center">
            <h3 class="text-themecolor">Faça seu anúncio!</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">Serviços</li>
            </ol>
        </div>
    </div>
    <div class="page-wrapper">
            <div class="container-fluid">
                
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">

                                <form class="form p-t-20" action="/regUser" method="post">
                                    @csrf
                                    <div class="form-group row">
                                        <div class="col-sm-6">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1">
                                                        <i class="ti-user"></i>
                                                    </span>
                                                </div>
                                                <input type="text" class="form-control" id="nomeServiço" name="nomeServiço" placeholder="Serviço">
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1">
                                                        <i class="ti-user"></i>
                                                    </span>
                                                </div>
                                                <input type="text" class="form-control" id="descricaoServiço" name="descricaoServiço" placeholder="Descrição">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-sm-5">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1">
                                                            <i class="ti-user"></i>
                                                        </span>
                                                </div>
                                               
                                            </div>
                                        </div>
                                        
                                        <div class="form-group row">
                                        <div class="col-sm-6">
                                            <label for="endereco">Endereço</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1">
                                                        <i class="ti-home"></i>
                                                    </span>
                                                </div>
                                                <input type="text" class="form-control" id="endereco" name="endereco" placeholder="Av, Rua...">
                                            </div>
                                        </div>
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

                                    </div>

                                    <div class="form-group row">
                                        <div class="col-sm-6">
                                            <label for="hInicial">Horário de início:</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1">
                                                        <i class="ti-email"></i>
                                                    </span>
                                                </div>
                                                <input type="time" class="form-control" id="hInicial" name="hInicial" placeholder="Horário de início:">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <label for="hFinal">Horário de término:</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1">
                                                        <i class="ti-email"></i>
                                                    </span>
                                                </div>
                                                <input type="time" class="form-control" id="hFinal" name="hFinal" placeholder="Horário de término:">
                                            </div>
                                        </div>
                                    </div>

                                   
                                    <div class="form-group">
                                        <button type="submit" name="anunciar" class="btn btn-success waves-effect waves-light m-r-10">Anunciar</button>
                                        <button type="submit" name="cancelar" class="btn btn-inverse waves-effect waves-light">Cancelar</button>
                                    </div>
                                    
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
    
@endsection

@section('content')

@endsection






