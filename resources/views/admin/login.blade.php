<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <!--<meta name="viewport" content="width=device-width, initial-scale=1.0">-->
    <meta name="viewport" content="width=device-width, initial-scale = 1.0,maximum-scale=1.0, user-scalable=no" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro</title>
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
    <!-- Custom fonts for this theme -->
    <link href="{{url('vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Theme CSS -->
    <link href="css/freelancer.min.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

</head>

<body>
    <!-- Navigation -->
  <nav class="navbar navbar-expand-lg bg-secondary text-uppercase" id="mainNav">
    <div class="container">
      <img src="{{url('../img/logo-pig-time.png')}}" class="light-logo" alt="pigtime" /></span> </a><a class="navbar-brand js-scroll-trigger" href="#page-top">PIG TIME</a>
      <button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#servicos">Serviços</a>
          </li>
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#sobre-nos">Sobre</a>
          </li>
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#contato">Contato</a>
          </li>
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="login">Entrar</a>
          </li>
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="/cadastrar">Registrar</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

    <div class="container mt-5">
        <form method="post" class="d-flex h-100 flex-column justify-content-center align-content-center ">

            <div class="row">
                <div class="col-sm-12 col-md-4">
                </div>
                <div class="col-sm-12 col-md-4 list-group">
                    <label for="email">E-mail</label>
                    <input value="" type="text" class="form-control" id="email" name="email" placeholder="Digite o nome do usuário">
                </div>

            </div>

            <div class="row">
                <div class="col-md-4">
                </div>
                <div class="col-sm-12 col-md-4 list-group">
                    <label value="" for="senha">Senha</label>
                    <input type="password" class="form-control" id="senha" name="senha" placeholder="Digite uma senha para o usuário">
                </div>

            </div>
            <div id="fButtons" class="d-flex justify-content-center my-3">
                <button class="btn btn-primary" type="submit">Entrar</button>
                <a class="btn btn-primary ml-3" href="cadastro.html" role="button">Cadastrar</a>
            </div>
        </form>
    </div>

    <footer class="page-footer fixed-bottom">

        <<!-- Copyright Section -->
        <section class="copyright py-4 text-center text-white">
            <div class="container">
                <small>Copyright &copy; Projeto Integrado 2019 | Digital House</small>
            </div>
        </section>
    </footer>

    <script src="./js/script.js"></script>
</body>

</html>