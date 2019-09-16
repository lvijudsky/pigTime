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
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
    
    <title>Pig Time - Projeto Integrador | Digital House </title>
    <!-- Bootstrap Core CSS -->
    <link href="../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- chartist CSS -->
    <link href="../assets/plugins/chartist-js/dist/chartist.min.css" rel="stylesheet">
    <link href="../assets/plugins/chartist-js/dist/chartist-init.css" rel="stylesheet">
    <link href="../assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css" rel="stylesheet">
    <!--This page css - Morris CSS -->
    <link href="../assets/plugins/c3-master/c3.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="css/colors/blue.css" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="fix-header fix-sidebar card-no-border">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar">
            <nav class="navbar top-navbar navbar-toggleable-sm navbar-light">
                <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.html">
                        <!-- Logo icon --><b>
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            
                            <!-- Light Logo icon -->
                            <img src="../assets/images/logo-pig-icon.png" alt="homepage" class="light-logo" />
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text --><span>
                         
                         <!-- Light Logo text -->    
                         <img src="../assets/images/logo-pig-time.png" class="light-logo" alt="homepage" /></span> </a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav mr-auto mt-md-0">
                        <!-- This is  -->
                        <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="mdi mdi-menu"></i></a> </li>
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        <li class="nav-item hidden-sm-down search-box"> <a class="nav-link hidden-sm-down text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="ti-search"></i></a>
                            <form class="app-search">
                                <input type="text" class="form-control" placeholder="Search & enter"> <a class="srh-btn"><i class="ti-close"></i></a> </form>
                        </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav my-lg-0">
                        <!-- ============================================================== -->
                        <!-- Profile -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="../assets/images/users/1.jpg" alt="user" class="profile-pic m-r-10" />Markarn Doe</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li> <a class="waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-gauge"></i><span class="hide-menu">Meus Ganhos</span></a>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="perfil.html" aria-expanded="false"><i class="mdi mdi-account-check"></i><span class="hide-menu">Perfil</span></a>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="servicos.html" aria-expanded="false"><i class="mdi mdi-emoticon"></i><span class="hide-menu">Serviços</span></a>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="inbox.html" aria-expanded="false"><i class="mdi mdi-table"></i><span class="hide-menu">Mensagem</span></a>
                        </li>
                    </ul>
                    <div class="text-center m-t-30">
                        <a href="anuncios.html" class="btn waves-effect waves-light btn-warning hidden-md-down"> Ganhar Tempo</a>
                    </div>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
            <!-- Bottom points-->
            <div class="sidebar-footer">
                <!-- item--><a href="" class="link" data-toggle="tooltip" title="Settings"><i class="ti-settings"></i></a>
                <!-- item--><a href="" class="link" data-toggle="tooltip" title="Email"><i class="mdi mdi-gmail"></i></a>
                <!-- item--><a href="" class="link" data-toggle="tooltip" title="Logout"><i class="mdi mdi-power"></i></a> </div>
            <!-- End Bottom points-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 col-8 align-self-center">
                        <h3 class="text-themecolor">Escolha um serviço e ganhe tempo!</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Serviços</li>
                        </ol>
                    </div>
                    <div class="col-md-7 col-4 align-self-center">
                        <a href="#" class="btn waves-effect waves-light btn-danger pull-right hidden-sm-down"> Anunciar serviço</a>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
              
                <!-- Row -->

                <div class="row">
                        <!-- Column -->
                        <div class="col-lg-4 col-md-4">
                                <div class="card">
                                    <img class="" src="../assets/images/background/previsao-do-tempo.jpg" alt="Card image cap">
                                    <div class="card-img-overlay" style="height:110px;">
                                        <h3 class="card-title text-white m-b-0 dl">Passear com Cachorro</h3>
                                        <small class="card-text text-white font-light">Paseear com meu Labrador no Parque Vila Lobos</small>
                                    </div>
                                    <div class="card-body weather-small">
                                            <h5 class="card-title">Maria Almeida</h5>
                                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    
                                        <div class="row">
                                            <div class="col-8 b-r align-self-center">
                                                <div class="d-flex">
                                                    <div class="display-6 text-info"><i class="far fa-clock"></i></div>
                                                    <div class="m-l-20">
                                                        <h1 class="font-light text-info m-b-0">13<sup>h</sup></h1>
                                                        <small>Pagamento 2h</small>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-4 text-center">
                                                <h1 class="font-light m-b-0">13<sup>KM</sup></h1>
                                                <small>Distância</small>
                                            </div>
                                        </div>
                                </div>
                                <div class="row"></div>
                                                <a href="#" class="btn btn-primary">Visualizar</a>
                                    </div>
                            </div>
                        <!-- Column -->
                        <!-- Column -->
                        <div class="col-lg-4 col-md-4">
                                <div class="card">
                                    <img class="" src="../assets/images/background/previsao-do-tempo.jpg" alt="Card image cap">
                                    <div class="card-img-overlay" style="height:110px;">
                                        <h3 class="card-title text-white m-b-0 dl">Colocar antena de TV</h3><br>
                                        <small class="card-text text-white font-light">Instalar antena de tv digital</small>
                                    </div>
                                    <div class="card-body weather-small">
                                            <h5 class="card-title">Marcelo Freitas</h5>
                                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    
                                        <div class="row">
                                            <div class="col-8 b-r align-self-center">
                                                <div class="d-flex">
                                                    <div class="display-6 text-info"><i class="far fa-clock"></i></div>
                                                    <div class="m-l-20">
                                                        <h1 class="font-light text-info m-b-0">13<sup>h</sup></h1>
                                                        <small>Pagamento 3h</small>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-4 text-center">
                                                <h1 class="font-light m-b-0">5<sup>KM</sup></h1>
                                                <small>Distância</small>
                                            </div>
                                        </div>
                                </div>
                                <div class="row"></div>
                                                <a href="#" class="btn btn-primary">Visualizar</a>
                                    </div>
                            </div>
                        <!-- Column -->
                        <!-- Column -->
                        <div class="col-lg-4 col-md-4">
                            <div class="card">
                                <img class="" src="../assets/images/background/previsao-do-tempo.jpg" alt="Card image cap">
                                <div class="card-img-overlay" style="height:110px;">
                                    <h3 class="card-title text-white m-b-0 dl">Colocar Quadros</h3><br>
                                    <small class="card-text text-white font-light">Parafusar quadros na minha sala</small>
                                </div>
                                <div class="card-body weather-small">
                                        <h5 class="card-title">Thaís Maranelo</h5>
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                
                                    <div class="row">
                                        <div class="col-8 b-r align-self-center">
                                            <div class="d-flex">
                                                <div class="display-6 text-info"><i class="far fa-clock"></i></div>
                                                <div class="m-l-20">
                                                    <h1 class="font-light text-info m-b-0">13<sup>h</sup></h1>
                                                    <small>Pagamento 1h</small>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-4 text-center">
                                            <h1 class="font-light m-b-0">15<sup>KM</sup></h1>
                                            <small>Distância</small>
                                        </div>
                                    </div>
                            </div>
                            <div class="row"></div>
                                            <a href="#" class="btn btn-primary">Visualizar</a>
                                </div>
                        </div>

                        <div class="row"></div>

                        <div class="col-lg-4 col-md-4">
                                <div class="card">
                                    <img class="" src="../assets/images/background/previsao-do-tempo.jpg" alt="Card image cap">
                                    <div class="card-img-overlay" style="height:110px;">
                                        <h3 class="card-title text-white m-b-0 dl">Passear com Cachorro</h3>
                                        <small class="card-text text-white font-light">Paseear com meu Labrador no Parque Vila Lobos</small>
                                    </div>
                                    <div class="card-body weather-small">
                                            <h5 class="card-title">Maria Almeida</h5>
                                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    
                                        <div class="row">
                                            <div class="col-8 b-r align-self-center">
                                                <div class="d-flex">
                                                    <div class="display-6 text-info"><i class="far fa-clock"></i></div>
                                                    <div class="m-l-20">
                                                        <h1 class="font-light text-info m-b-0">13<sup>h</sup></h1>
                                                        <small>Pagamento 2h</small>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-4 text-center">
                                                <h1 class="font-light m-b-0">13<sup>KM</sup></h1>
                                                <small>Distância</small>
                                            </div>
                                        </div>
                                </div>
                                <div class="row"></div>
                                                <a href="#" class="btn btn-primary">Visualizar</a>
                                    </div>
                            </div>
                        <!-- Column -->
                        <!-- Column -->
                        <div class="col-lg-4 col-md-4">
                                <div class="card">
                                    <img class="" src="../assets/images/background/previsao-do-tempo.jpg" alt="Card image cap">
                                    <div class="card-img-overlay" style="height:110px;">
                                        <h3 class="card-title text-white m-b-0 dl">Colocar antena de TV</h3><br>
                                        <small class="card-text text-white font-light">Instalar antena de tv digital</small>
                                    </div>
                                    <div class="card-body weather-small">
                                            <h5 class="card-title">Marcelo Freitas</h5>
                                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    
                                        <div class="row">
                                            <div class="col-8 b-r align-self-center">
                                                <div class="d-flex">
                                                    <div class="display-6 text-info"><i class="far fa-clock"></i></div>
                                                    <div class="m-l-20">
                                                        <h1 class="font-light text-info m-b-0">13<sup>h</sup></h1>
                                                        <small>Pagamento 3h</small>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-4 text-center">
                                                <h1 class="font-light m-b-0">5<sup>KM</sup></h1>
                                                <small>Distância</small>
                                            </div>
                                        </div>
                                </div>
                                <div class="row"></div>
                                                <a href="#" class="btn btn-primary">Visualizar</a>
                                    </div>
                            </div>
                        <!-- Column -->
                        <!-- Column -->
                        <div class="col-lg-4 col-md-4">
                            <div class="card">
                                <img class="" src="../assets/images/background/previsao-do-tempo.jpg" alt="Card image cap">
                                <div class="card-img-overlay" style="height:110px;">
                                    <h3 class="card-title text-white m-b-0 dl">Colocar Quadros</h3><br>
                                    <small class="card-text text-white font-light">Parafusar quadros na minha sala</small>
                                </div>
                                <div class="card-body weather-small">
                                        <h5 class="card-title">Thaís Maranelo</h5>
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                
                                    <div class="row">
                                        <div class="col-8 b-r align-self-center">
                                            <div class="d-flex">
                                                <div class="display-6 text-info"><i class="far fa-clock"></i></div>
                                                <div class="m-l-20">
                                                    <h1 class="font-light text-info m-b-0">13<sup>h</sup></h1>
                                                    <small>Pagamento 1h</small>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-4 text-center">
                                            <h1 class="font-light m-b-0">15<sup>KM</sup></h1>
                                            <small>Distância</small>
                                        </div>
                                    </div>
                            </div>
                            <div class="row"></div>
                                            <a href="#" class="btn btn-primary">Visualizar</a>
                                </div>
                        </div>

                        <div class="row"></div>

                        <div class="col-lg-4 col-md-4">
                                <div class="card">
                                    <img class="" src="../assets/images/background/previsao-do-tempo.jpg" alt="Card image cap">
                                    <div class="card-img-overlay" style="height:110px;">
                                        <h3 class="card-title text-white m-b-0 dl">Passear com Cachorro</h3>
                                        <small class="card-text text-white font-light">Paseear com meu Labrador no Parque Vila Lobos</small>
                                    </div>
                                    <div class="card-body weather-small">
                                            <h5 class="card-title">Maria Almeida</h5>
                                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    
                                        <div class="row">
                                            <div class="col-8 b-r align-self-center">
                                                <div class="d-flex">
                                                    <div class="display-6 text-info"><i class="far fa-clock"></i></div>
                                                    <div class="m-l-20">
                                                        <h1 class="font-light text-info m-b-0">13<sup>h</sup></h1>
                                                        <small>Pagamento 2h</small>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-4 text-center">
                                                <h1 class="font-light m-b-0">13<sup>KM</sup></h1>
                                                <small>Distância</small>
                                            </div>
                                        </div>
                                </div>
                                <div class="row"></div>
                                                <a href="#" class="btn btn-primary">Visualizar</a>
                                    </div>
                            </div>
                        <!-- Column -->
                        <!-- Column -->
                        <div class="col-lg-4 col-md-4">
                                <div class="card">
                                    <img class="" src="../assets/images/background/previsao-do-tempo.jpg" alt="Card image cap">
                                    <div class="card-img-overlay" style="height:110px;">
                                        <h3 class="card-title text-white m-b-0 dl">Colocar antena de TV</h3><br>
                                        <small class="card-text text-white font-light">Instalar antena de tv digital</small>
                                    </div>
                                    <div class="card-body weather-small">
                                        
                                            <h5 class="card-title">Marcelo Freitas</h5>
                                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    
                                        <div class="row">
                                            <div class="col-8 b-r align-self-center">
                                                <div class="d-flex">
                                                    <div class="display-6 text-info"><i class="far fa-clock"></i></div>
                                                    <div class="m-l-20">
                                                        <h1 class="font-light text-info m-b-0">13<sup>h</sup></h1>
                                                        <small>Pagamento 3h</small>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-4 text-center">
                                                <h1 class="font-light m-b-0">5<sup>KM</sup></h1>
                                                <small>Distância</small>
                                            </div>
                                        </div>
                                </div>
                                <div class="row"></div>
                                                <a href="#" class="btn btn-primary">Visualizar</a>
                                    </div>
                            </div>
                        <!-- Column -->
                        <!-- Column -->
                        <div class="col-lg-4 col-md-4">
                            <div class="card">
                                <img class="" src="../assets/images/background/previsao-do-tempo.jpg" alt="Card image cap">
                                <div class="card-img-overlay" style="height:110px;">
                                    <h3 class="card-title text-white m-b-0 dl">Colocar Quadros</h3><br>
                                    <small class="card-text text-white font-light">Parafusar quadros na minha sala</small>
                                </div>
                                <div class="card-body weather-small">
                                        <h5 class="card-title">Thaís Maranelo</h5>
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                
                                    <div class="row">
                                        <div class="col-8 b-r align-self-center">
                                            <div class="d-flex">
                                                <div class="display-6 text-info"><i class="far fa-clock"></i></div>
                                                <div class="m-l-20">
                                                    <h1 class="font-light text-info m-b-0">13<sup>h</sup></h1>
                                                    <small>Pagamento 1h</small>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-4 text-center">
                                            <h1 class="font-light m-b-0">15<sup>KM</sup></h1>
                                            <small>Distância</small>
                                        </div>
                                    </div>
                            </div>
                            <div class="row"></div>
                                            <a href="#" class="btn btn-primary">Visualizar</a>
                                </div>
                        </div>

                        <div class="d-flex justify-content-center"></div><a href="#" class="btn btn-primary d-flex justify-content-center">Carregar Mais</a></div>
                        
                        <!-- Column -->
                    </div>
                    <!-- Row -->
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer"> © 2019 Pig Time - Projeto Integrador | Digital House </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="../assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../assets/plugins/bootstrap/js/tether.min.js"></script>
    <script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="../assets/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <!--Custom JavaScript -->
    <script src="js/custom.min.js"></script>
    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->
    <!-- chartist chart -->
    <script src="../assets/plugins/chartist-js/dist/chartist.min.js"></script>
    <script src="../assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js"></script>
    <!--c3 JavaScript -->
    <script src="../assets/plugins/d3/d3.min.js"></script>
    <script src="../assets/plugins/c3-master/c3.min.js"></script>
    <!-- Chart JS -->
    <script src="js/dashboard1.js"></script>
</body>

</html>
