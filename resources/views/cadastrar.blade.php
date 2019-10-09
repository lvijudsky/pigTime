@extends('layouts.master')

@section('title' , 'Cadastrar')

@section('content')

    <div class="page-wrapper">
        <div class="container-fluid d-flex justify-content-center">
                    
        <div class="row">
        <div class="col-lg-12">
            <div class="card">
            <div class="card-body">
        <h4 class="card-title" style="text-align: center">Formulário de Cadastro</h4>

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
                                                <input type="text" class="form-control" id="nameInput" name="nome" placeholder="Nome">
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1">
                                                        <i class="ti-user"></i>
                                                    </span>
                                                </div>
                                                <input type="text" class="form-control" id="sobrenome" name="sobrenome" placeholder="Sobrenome">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-sm-4">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1">
                                                            <i class="ti-user"></i>
                                                        </span>
                                                </div>
                                                <input type="text" class="form-control" id="rg" name="rg" placeholder="RG">
                                            </div>
                                        </div>

                                        <div class="col-sm-4">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1">
                                                            <i class="ti-user"></i>
                                                        </span>
                                                </div>
                                                <input type="text" class="form-control" id="cpf" name="cpf" placeholder="CPF">
                                            </div>
                                        </div>

                                        <div class="col-sm-4">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1">
                                                            <i class="ti-user"></i>
                                                        </span>
                                                </div>
                                                <select name="sexo" id="sexo" class="form-control">
                                                    <option value="sexo" selected disabled hidden>Sexo</option>
                                                    <option value="m">Masculino</option>
                                                    <option value="f">Feminino</option>
                                                    <option value="o">Outro</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-sm-6">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1">
                                                        <i class="ti-email"></i>
                                                    </span>
                                                </div>
                                                <input type="email" class="form-control" id="email" name="email" placeholder="E-mail">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1">
                                                        <i class="ti-email"></i>
                                                    </span>
                                                </div>
                                                <input type="email" class="form-control" id="email" name="emailConf" placeholder="Confirmar e-mail">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-6">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1">
                                                        <i class="ti-lock"></i>
                                                    </span>
                                                </div>
                                                <input type="password" class="form-control" id="senha" name="password" placeholder="Senha">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1">
                                                        <i class="ti-lock"></i>
                                                    </span>
                                                </div>
                                                <input type="password" class="form-control" id="senha" name="passwordConf" placeholder="Confirmar senha">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-sm-6">
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
                                        <div class="col-sm-5">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1">
                                                        <i class="ti-home"></i>
                                                    </span>
                                                </div>
                                                <input type="text" class="form-control" id="bairro" name="bairro" placeholder="Bairro">
                                            </div>
                                        </div>
                                        <div class="col-sm-5">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1">
                                                        <i class="ti-home"></i>
                                                    </span>
                                                </div>
                                                <input type="text" class="form-control" id="cidade" name="cidade" placeholder="Cidade">
                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1">
                                                        <i class="ti-home"></i>
                                                    </span>
                                                </div>
                                                <input type="text" class="form-control" id="uf" name="uf" placeholder="UF">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-sm-6">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1">
                                                        <i class="ti-mobile"></i>
                                                    </span>
                                                </div>
                                                <input type="text" class="form-control" id="telefone_1" name="telefone_1" placeholder="Telefone 1">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1">
                                                        <i class="ti-mobile"></i>
                                                    </span>
                                                </div>
                                                <input type="text" class="form-control" id="telefone_2" name="telefone_2" placeholder="Telefone 2">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-sm-3">
                                                <label class="btn btn-warning" for="fileToUpload">Enviar foto</label>
                                                <input type="file" name="fileToUpload" id="fileToUpload" class="d-none" >
                                        </div>
                                        <div class="col-sm-5">
                                        </div>
                                    </div>
                                   
                                    <div class="form-group">
                                        <button type="submit" name="enviar" class="btn btn-success waves-effect waves-light m-r-10">Enviar</button>
                                        <button type="submit" name="cancelar" class="btn btn-inverse waves-effect waves-light">Cancelar</button>
                                    </div>
                                    
                                </form>
                                </div>
                        </div>
                    </div>
                </div>

            </div>