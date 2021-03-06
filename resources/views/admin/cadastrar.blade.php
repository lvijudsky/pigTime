<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{url('./admin/assets/images/favicon.png')}}">
    <title>Pig Time - Projeto Integrador | Digital House </title>
    <!-- Bootstrap Core CSS -->
    <link href="{{url('./admin/assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- chartist CSS -->
    <link href="{{url('./admin/assets/plugins/chartist-js/dist/chartist.min.css')}}" rel="stylesheet">
    <link href="{{url('./admin/assets/plugins/chartist-js/dist/chartist-init.css')}}" rel="stylesheet">
    <link href="{{url('./admin/assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css')}}" rel="stylesheet">
    <!--This page css - Morris CSS -->
    <link href="{{url('./admin/assets/plugins/c3-master/c3.min.css')}}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{url('./admin/css/style.css')}}" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="{{url('./admin/css/colors/blue.css')}}" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="fix-header fix-sidebar card-no-border">
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <div id="main-wrapper">
        <header class="topbar">
            <nav class="navbar top-navbar navbar-toggleable-sm navbar-light">
                <div class="navbar-header">
                    <a class="navbar-brand" href="/">
                        <img src="{{url('./admin/assets/images/logo-pig-icon.png')}}" alt="homepage" class="light-logo" />
                        </b>
                        <img src="{{url('./admin/assets/images/logo-pig-time.png')}}" class="light-logo" alt="homepage" /></span>
                    </a>
                </div>
                <div class="navbar-collapse">
                </div>
            </nav>
        </header>
        <div class="page-wrapper">
            <div class="container-fluid">
                
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title" style="text-align: center">Formulário de Cadastro</h4>

                                <form class="form p-t-20" method='post' action='/register'>

                                    <div class="form-group row">
                                        <div class="col-sm-6">
                                            <label for="nome">Nome</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1">
                                                        <i class="ti-user"></i>
                                                    </span>
                                                </div>
                                                <input type="text" class="form-control" id="exampleInputuname" placeholder="Nome" name='name'>
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <label for="sobrenome">Sobrenome</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1">
                                                        <i class="ti-user"></i>
                                                    </span>
                                                </div>
                                                <input type="text" class="form-control" id="exampleInputuname" placeholder="Sobrenome" name='lastName'>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-sm-5">
                                            <label for="rg">RG</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1">
                                                            <i class="ti-user"></i>
                                                        </span>
                                                </div>
                                                <input type="text" class="form-control" id="exampleInputuname" placeholder="RG" name='RG'>
                                            </div>
                                        </div>

                                        <div class="col-sm-5">
                                            <label for="cpf">CPF</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1">
                                                            <i class="ti-user"></i>
                                                        </span>
                                                </div>
                                                <input type="text" class="form-control" id="exampleInputuname" placeholder="CPF" name='CPF'>
                                            </div>
                                        </div>

                                        <div class="col-sm-2">
                                            <label for="sexo">Sexo</label>
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
                                            <label for="email">E-mail</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1">
                                                        <i class="ti-email"></i>
                                                    </span>
                                                </div>
                                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="E-mail" name='email'>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <label for="email">Repetir e-mail</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1">
                                                        <i class="ti-email"></i>
                                                    </span>
                                                </div>
                                                <input type="email" class="form-control" id="email" name="emailConf" placeholder="Repetir e-mail">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-6">
                                            <label for="senha">Senha</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1">
                                                        <i class="ti-lock"></i>
                                                    </span>
                                                </div>
                                                <input type="password" class="form-control" id="pwd1" placeholder="Senha" name='password'>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <label for="senha">Repetir senha</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1">
                                                        <i class="ti-lock"></i>
                                                    </span>
                                                </div>
                                                <input type="password" class="form-control" id="senha" name="passwordConf" placeholder="Repetir senha">
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
                                                <input type="text" class="form-control" id="address-1" placeholder="Av, Rua..." name='adress'>
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
                                                <input type="text" class="form-control" id="address-2" placeholder="N°" name='adress'>
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
                                                <input type="text" class="form-control" id="address-3" placeholder="Ap, BL, Cj..." name='adress'>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-sm-5">
                                            <label for="bairro">Bairro</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1">
                                                        <i class="ti-home"></i>
                                                    </span>
                                                </div>
                                                <input type="text" class="form-control" id="bairro" placeholder="Bairro" name='adress'>
                                            </div>
                                        </div>
                                        <div class="col-sm-5">
                                            <label for="cidade">Cidade</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1">
                                                        <i class="ti-home"></i>
                                                    </span>
                                                </div>
                                                <input type="text" class="form-control" id="cidade" placeholder="Cidade" name='adress'>
                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                            <label for="uf">UF</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1">
                                                        <i class="ti-home"></i>
                                                    </span>
                                                </div>
                                                <input type="text" class="form-control" id="uf" placeholder="UF" name='adress'>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-sm-6">
                                            <label for="telefone_1">Telefone 1</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1">
                                                        <i class="ti-mobile"></i>
                                                    </span>
                                                </div>
                                                <input type="text" class="form-control" id="tel-1" placeholder="Telefone 1" name='phone'>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <label for="telefone_2">Telefone 2</label>
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
                                        <div class="col-sm-2">
                                                <label for="fileToUpload">Carregar foto</label>
                                                <input type="file" name="fileToUpload" id="fileToUpload" class="form-control-file" name='picture'>
                                            </form>
                                        </div>
                                        <div class="col-sm-5">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="checkbox checkbox-success">
                                            <input id="checkbox1" type="checkbox">
                                            <label for="checkbox1"> Lembrar </label>
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

            <footer class="footer"> © 2019 Pig Time - Projeto Integrador | Digital House </footer>
        </div>
    </div>
    <script src="{{url('./admin/assets/plugins/jquery/jquery.min.js')}}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{url('./admin/assets/plugins/bootstrap/js/tether.min.js')}}"></script>
    <script src="{{url('./admin/assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="{{url('./admin/js/jquery.slimscroll.js')}}"></script>
    <!--Wave Effects -->
    <script src="{{url('./admin/js/waves.js')}}"></script>
    <!--Menu sidebar -->
    <script src="{{url('./admin/js/sidebarmenu.js')}}"></script>
    <!--stickey kit -->
    <script src="{{url('./admin/assets/plugins/sticky-kit-master/dist/sticky-kit.min.js')}}"></script>
    <!--Custom JavaScript -->
    <script src="{{url('./admin/js/custom.min.js')}}"></script>
    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->
    <!-- chartist chart -->
    <script src="{{url('./admin/assets/plugins/chartist-js/dist/chartist.min.js')}}"></script>
    <script src="{{url('./admin/assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js')}}"></script>
    <!--c3 JavaScript -->
    <script src="{{url('./admin/assets/plugins/d3/d3.min.js')}}"></script>
    <script src="{{url('./admin/assets/plugins/c3-master/c3.min.js')}}"></script>
    <!-- Chart JS -->
    <script src="{{url('./admin/js/dashboard1.js')}}"></script>
</body>

</html>