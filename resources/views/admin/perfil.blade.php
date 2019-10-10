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
                        <b>
                            
                            <img src="{{url('./admin/assets/images/logo-pig-icon.png')}}" alt="homepage" class="light-logo" />
                        </b>
                        <span>
                           
                         <img src="{{url('./admin/assets/images/logo-pig-time.png')}}" class="light-logo" alt="homepage" /></span> </a>
                </div>
               
                <div class="navbar-collapse">
                   
                    <ul class="navbar-nav mr-auto mt-md-0">
                      
                        <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted waves-effect waves-dark" href="{{url('javascript:void(0)')}}"><i class="mdi mdi-menu"></i></a> </li>
                       
                        <li class="nav-item hidden-sm-down search-box"> <a class="nav-link hidden-sm-down text-muted waves-effect waves-dark" href="{{url('javascript:void(0)')}}"><i class="ti-search"></i></a>
                            <form class="app-search">
                                <input type="text" class="form-control" placeholder="Search & enter"> <a class="srh-btn"><i class="ti-close"></i></a> </form>
                        </li>
                    </ul>
                
                    <ul class="navbar-nav my-lg-0">
                    
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="/perfil" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="{{url('./admin/assets/images/users/1.jpg')}}" alt="user" class="profile-pic m-r-10" />{{Auth::user()->nome}}</a><a class="btn waves-effect waves-light btn-danger hidden-sm-down" href="/logout">Logout</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <aside class="left-sidebar">
           
            <div class="scroll-sidebar">
                
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li> <a class="waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-gauge"></i><span class="hide-menu">Meus Ganhos</span></a>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="/perfil" aria-expanded="false"><i class="mdi mdi-account-check"></i><span class="hide-menu">Perfil</span></a>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="/servicos" aria-expanded="false"><i class="mdi mdi-emoticon"></i><span class="hide-menu">Serviços</span></a>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="/inbox" aria-expanded="false"><i class="mdi mdi-table"></i><span class="hide-menu">Mensagem</span></a>
                        </li>
                    </ul>
                    <div class="text-center m-t-30">
                        <a href="anuncios.html" class="btn waves-effect waves-light btn-warning hidden-md-down"> Ganhar Tempo</a>
                    </div>
                </nav>
               
            </div>
           
            <div class="sidebar-footer">
               <a href="" class="link" data-toggle="tooltip" title="Settings"><i class="ti-settings"></i></a>
                <a href="" class="link" data-toggle="tooltip" title="Email"><i class="mdi mdi-gmail"></i></a>
                <a href="" class="link" data-toggle="tooltip" title="Logout"><i class="mdi mdi-power"></i></a> </div>
            
        </aside>
        
        <div class="page-wrapper">
            
            <div class="container-fluid">
                
                <div class="row page-titles">
                    <div class="col-md-5 col-8 align-self-center">
                        <h3 class="text-themecolor">Painel administrativo</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                    </div>
                    <div class="col-md-7 col-4 align-self-center">
                        <a href="#" class="btn waves-effect waves-light btn-danger pull-right hidden-sm-down"> Anunciar serviço</a>
                    </div>
                </div>
                
              
                <!-- Row -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-4 col-xlg-3 col-md-5">
                        <!-- Column -->
                        <div class="card">
                            <img class="card-img-top" src="{{url('./admin/assets/images/background/profile-bg.jpg')}}" alt="Card image cap">
                            <div class="card-block little-profile text-center">
                                <div class="pro-img"><img src="{{url('./admin/assets/images/users/4.jpg')}}" alt="user" /></div>
                                <h3 class="m-b-0">{{Auth::user()->nome}}</h3>
                                <h4 class="m-b-0">{{Auth::user()->sobrenome}}</h4>
                            
                                
                                <div class="row text-center m-t-20">
                                    <div class="col-lg-4 col-md-4 m-t-20">
                                        <h3 class="m-b-0 font-light">59</h3><small>Aprovados</small></div>
                                    <div class="col-lg-4 col-md-4 m-t-20">
                                        <h3 class="m-b-0 font-light">9</h3><small>Reprovados</small></div>
                                    <div class="col-lg-4 col-md-4 m-t-20">
                                        <h3 class="m-b-0 font-light">5</h3><small>Anuncios</small></div>
                                </div>
                            </div>
                        </div>
                        <!-- Column -->
                        <div class="card">
                            <div class="card-block bg-info">
                                <h4 class="text-white card-title">Mensagens</h4>
                                <h6 class="card-subtitle text-white m-b-0 op-5">Tire suas dúvidas antes de aprovar os serviços</h6>
                            </div>
                            <div class="card-block">
                                <div class="message-box contact-box">
                                    <h2 class="add-ct-btn"><button type="button" class="btn btn-circle btn-lg btn-success waves-effect waves-dark">+</button></h2>
                                    <div class="message-widget contact-widget">
                                        <!-- Message -->
                                        <a href="#">
                                            <div class="user-img"> <img src="{{url('./admin/assets/images/users/1.jpg')}}" alt="user" class="img-circle"> <span class="profile-status online pull-right"></span> </div>
                                            <div class="mail-contnet">
                                                <h5>Marcelo Freitas</h5> <span class="mail-desc">marcelo.freitas@hotmail.com</span></div>
                                        </a>
                                        <!-- Message -->
                                        <a href="#">
                                            <div class="user-img"> <img src="{{url('./admin/assets/images/users/2.jpg')}}" alt="user" class="img-circle"> <span class="profile-status busy pull-right"></span> </div>
                                            <div class="mail-contnet">
                                                <h5>Pamela Mendonça</h5> <span class="mail-desc">pamela1987@gmail.com</span></div>
                                        </a>
                                        <!-- Message -->
                                        <a href="#">
                                            <div class="user-img"> <span class="round">A</span> <span class="profile-status away pull-right"></span> </div>
                                            <div class="mail-contnet">
                                                <h5>Thais Marello</h5> <span class="mail-desc">thais.marello@gmail.com</span></div>
                                        </a>
                                        <!-- Message -->
                                        <a href="#">
                                            <div class="user-img"> <img src="{{url('./admin/assets/images/users/4.jpg')}}" alt="user" class="img-circle"> <span class="profile-status offline pull-right"></span> </div>
                                            <div class="mail-contnet">
                                                <h5>Katia Silva</h5> <span class="mail-desc">katia@gmail.com</span></div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-xlg-9 col-md-7">
                        <div class="card">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs profile-tab" role="tablist">
                                <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#aprovacao" role="tab">Aguardando sua aprovação</a> </li>
                                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#servicos" role="tab">Serviços a realizar</a> </li>
                                
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">
                                    <div class="tab-pane active" id="aprovacao" role="tabpanel">
                                        <div class="card-block">
                                            <div class="profiletimeline">
                
                                                
                                                <div class="sl-item">
                                                    <div class="sl-left"> <img src="{{url('./admin/assets/images/users/2.jpg')}}" alt="user" class="img-circle"> </div>
                                                    <div class="sl-right">
                                                        <div> <a href="#" class="link">Maria tem interesse em:</a> <span class="link">Instalar Quadro</span>
                                                            <div class="m-t-20 row">
                                                                <div class="col-md-3 col-xs-12"><img src="{{url('./admin/assets/images/big/img1.jpg')}}" alt="user" class="img-responsive radius"></div>
                                                                <div class="col-md-9 col-xs-12">
                                                                    <p> João, está aguardando sua aprovação para o serviço que você anunciou. Verifique o perfil do João atentamente e decida a aprovaçao o mais breve possível  </p> <a href="#" class="btn btn-warning" style="margin-right:4px"> Ver perfil</a> <a href="#" class="btn btn-primary" style="margin-right:4px"> Aprovar</a><a href="#" class="btn btn-danger"> Reprovar</a></div>
                                                            </div>
                                                        
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                <hr>
                                                <div class="sl-item">
                                                        <div class="sl-left"> <img src="{{url('./admin/assets/images/users/2.jpg')}}" alt="user" class="img-circle"> </div>
                                                        <div class="sl-right">
                                                            <div> <a href="#" class="link">Maria tem interesse em:</a> <span class="link">Instalar Quadro</span>
                                                                <div class="m-t-20 row">
                                                                    <div class="col-md-3 col-xs-12"><img src="{{url('./admin/assets/images/big/img1.jpg')}}" alt="user" class="img-responsive radius"></div>
                                                                    <div class="col-md-9 col-xs-12">
                                                                        <p> João, está aguardando sua aprovação para o serviço que você anunciou. Verifique o perfil do João atentamente e decida a aprovaçao o mais breve possível  </p> <a href="#" class="btn btn-warning" style="margin-right:4px"> Ver perfil</a> <a href="#" class="btn btn-primary" style="margin-right:4px"> Aprovar</a><a href="#" class="btn btn-danger"> Reprovar</a></div>
                                                                </div>
                                                            
                                                            </div>
                                                        </div>
                                                    </div>
                                                <hr>
                                                <div class="sl-item">
                                                    <div class="sl-left"> <img src="{{url('./admin/assets/images/users/2.jpg')}}" alt="user" class="img-circle"> </div>
                                                    <div class="sl-right">
                                                        <div> <a href="#" class="link">Maria tem interesse em:</a> <span class="link">Instalar Quadro</span>
                                                            <div class="m-t-20 row">
                                                                <div class="col-md-3 col-xs-12"><img src="{{url('./admin/assets/images/big/img1.jpg')}}" alt="user" class="img-responsive radius"></div>
                                                                <div class="col-md-9 col-xs-12">
                                                                    <p> João, está aguardando sua aprovação para o serviço que você anunciou. Verifique o perfil do João atentamente e decida a aprovaçao o mais breve possível  </p> <a href="#" class="btn btn-warning" style="margin-right:4px"> Ver perfil</a> <a href="#" class="btn btn-primary" style="margin-right:4px"> Aprovar</a><a href="#" class="btn btn-danger"> Reprovar</a></div>
                                                            </div>
                                                        
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--second tab-->
                                    <div class="tab-pane" id="servicos" role="tabpanel">
                                        <div class="card-block">
                                        
                                            
                                                    <div class="sl-item">
                                                    
                                                        <div class="sl-right">
                                                            <div> <a href="#" class="link">Maria tem interesse em:</a> <span class="link">Instalar Quadro</span>
                                                                <div class="m-t-20 row">
                                                                    <div class="col-md-3 col-xs-12"><img src="{{url('./admin/assets/images/big/img1.jpg')}}" alt="user" class="img-responsive radius"></div>
                                                                    <div class="col-md-9 col-xs-12">
                                                                        <p> João, está aguardando sua aprovação para o serviço que você anunciou. Verifique o perfil do João atentamente e decida a aprovaçao o mais breve possível  </p> <a href="#" class="btn btn-primary" style="margin-right:4px"> Aprovado</a> <a href="#" class="btn btn-warning" style="margin-right:4px"> Ver anúncio</a>
                                                                </div>
                                                            
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <div class="sl-item">
                                                        
                                                            <div class="sl-right">
                                                                <div> <a href="#" class="link">Maria tem interesse em:</a> <span class="link">Instalar Quadro</span>
                                                                    <div class="m-t-20 row">
                                                                        <div class="col-md-3 col-xs-12"><img src="{{url('./admin/assets/images/big/img1.jpg')}}" alt="user" class="img-responsive radius"></div>
                                                                        <div class="col-md-9 col-xs-12">
                                                                            <p> João, está aguardando sua aprovação para o serviço que você anunciou. Verifique o perfil do João atentamente e decida a aprovaçao o mais breve possível  </p><a href="#" class="btn btn-danger"> Reprovado</a></div>
                                                                    </div>
                                                                
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <hr>
                                            
                                    
                                            
                                            <h4 class="font-medium m-t-30">Meus progressos</h4>
                                            <hr>
                                            <h5 class="m-t-30">Aprovados <span class="pull-right">80%</span></h5>
                                            <div class="progress">
                                                <div class="progress-bar bg-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width:80%; height:6px;"> <span class="sr-only">50% Complete</span> </div>
                                            </div>
                                            <h5 class="m-t-30">Reprovados <span class="pull-right">15%</span></h5>
                                            <div class="progress">
                                                <div class="progress-bar bg-info" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width:90%; height:6px;"> <span class="sr-only">50% Complete</span> </div>
                                            </div>
                                
                                        </div>
                                    </div>
                                    
                                </div>
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
