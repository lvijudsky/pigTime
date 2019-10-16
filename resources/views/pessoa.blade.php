<!DOCTYPE html>
<html lang="pt-br">

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
    <div>Icons made by <a href="https://www.flaticon.com/authors/smashicons" title="Smashicons">Smashicons</a> from <a href="https://www.flaticon.com/"             title="Flaticon">www.flaticon.com</a></div>
    <div>Icons made by <a href="https://www.flaticon.com/authors/smashicons" title="Smashicons">Smashicons</a> from <a href="https://www.flaticon.com/"             title="Flaticon">www.flaticon.com</a></div>
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
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="/perfil" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="{{url('./admin/assets/images/users/1.jpg')}}" alt="user" class="profile-pic m-r-10" />Bruno Almeida</a><a class="btn waves-effect waves-light btn-danger hidden-sm-down" href="/logout">Logout</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        
        <div class="page-wrapper ml-0">
            
            <div class="container-fluid">
                
                    <!-- Column -->
                    <div class="col-lg-12">
                        <!-- Column -->
                        <div class="card">
                            <img class="card-img-top" src="{{url('./admin/assets/images/background/profile-bg.jpg')}}" alt="Card image cap">
                            <div class="card-block little-profile text-center">
                                <div class="pro-img"><img src="{{url('./admin/assets/images/users/4.jpg')}}" alt="user" /></div>
                                <h3 class="m-b-0">Bruno Almeida</h3>
                                <button type="button" class="btn btn-primary">Seguir</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <!-- Avaliação -->
                        <div class="card">
                            <div class="card-block little-profile text-center">
                                <p class="m-b-0">Avaliação</p>

                                <img src="{{ url('img/star1.png') }}" style="width:40px;" id="s1"></a>

                                <img src="{{ url('img/star1.png') }}" style="width:40px;" id="s2"></a>

                                <img src="{{ url('img/star1.png') }}" style="width:40px;" id="s3"></a>

                                <img src="{{ url('img/star1.png') }}" style="width:40px;" id="s4"></a>

                                <img src="{{ url('img/star.png') }}" style="width:40px;" id="s5"></a>

                                <p class="m-b-0">Observações</p>
                            </div>
                        </div>
                        <!-- Serviços -->
                        <div class="card">
                            <div class="card-block little-profile text-center">
                                <p class="m-b-0">Avaliação</p>

                                <img src="{{ url('img/star1.png') }}" style="width:40px;" id="s1"></a>

                                <img src="{{ url('img/star1.png') }}" style="width:40px;" id="s2"></a>

                                <img src="{{ url('img/star1.png') }}" style="width:40px;" id="s3"></a>

                                <img src="{{ url('img/star1.png') }}" style="width:40px;" id="s4"></a>

                                <img src="{{ url('img/star.png') }}" style="width:40px;" id="s5"></a>

                                <p class="m-b-0">Observações</p>
                            </div>
                        </div>
                    </div>
            </div>
               
           
        </div>
                <footer class="footer" style= "left:0"> © 2019 Pig Time - Projeto Integrador | Digital House </footer>
      
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
