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
                            <img src="./admin/assets/images/logo-pig-icon.png" alt="homepage" class="light-logo" />
                        </b>
                <span>
                         
                         
                         <img src="./admin/assets/images/logo-pig-time.png" class="light-logo" alt="homepage" /></span> </a>
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
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="./admin/assets/images/users/1.jpg" alt="user" class="profile-pic m-r-10" />{{Auth::user()->nome->}}</a>
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
                        <li> <a class="waves-effect waves-dark" href="/inbox" aria-expanded="false"><i class="mdi mdi-table"></i><span class="hide-menu">Mensagens</span></a>
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
                            <li class="breadcrumb-item"><a href="{{url('javascript:void(0)')}}">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                    </div>
                    <div class="col-md-7 col-4 align-self-center">
                        <a href="#" class="btn waves-effect waves-light btn-danger pull-right hidden-sm-down"> Anunciar serviço</a>
                    </div>
                </div>
                <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="row">
                                    <div class="col-xlg-2 col-lg-4 col-md-4">
                                        <div class="card-body inbox-panel"><a href="{{url('app-compose.html')}}" class="btn btn-danger m-b-20 p-10 btn-block waves-effect waves-light">Compose</a>
                                            <ul class="list-group list-group-full">
                                                <li class="list-group-item active"> <a href="{{url('javascript:void(0)')}}"><i class="mdi mdi-gmail"></i> Inbox </a><span class="badge badge-success ml-auto">6</span></li>
                                                <li class="list-group-item">
                                                    <a href="{{url('javascript:void(0)')}}"> <i class="mdi mdi-star"></i> Starred </a>
                                                </li>
                                                <li class="list-group-item">
                                                    <a href="{{url('javascript:void(0)')}}"> <i class="mdi mdi-send"></i> Draft </a><span class="badge badge-danger ml-auto">3</span></li>
                                                <li class="list-group-item ">
                                                    <a href="{{url('javascript:void(0)')}}"> <i class="mdi mdi-file-document-box"></i> Sent Mail </a>
                                                </li>
                                                <li class="list-group-item">
                                                    <a href="{{url('javascript:void(0)')}}"> <i class="mdi mdi-delete"></i> Trash </a>
                                                </li>
                                            </ul>
                                            <h3 class="card-title m-t-40">Labels</h3>
                                            <div class="list-group b-0 mail-list"> <a href="#" class="list-group-item"><span class="fa fa-circle text-info m-r-10"></span>Work</a> <a href="#" class="list-group-item"><span class="fa fa-circle text-warning m-r-10"></span>Family</a> <a href="#" class="list-group-item"><span class="fa fa-circle text-purple m-r-10"></span>Private</a> <a href="#" class="list-group-item"><span class="fa fa-circle text-danger m-r-10"></span>Friends</a> <a href="#" class="list-group-item"><span class="fa fa-circle text-success m-r-10"></span>Corporate</a> </div>
                                        </div>
                                    </div>
                                    <div class="col-xlg-10 col-lg-8 col-md-8">
                                        <div class="card-body">
                                            <div class="btn-group m-b-10 m-r-10" role="group" aria-label="Button group with nested dropdown">
                                                <button type="button" class="btn btn-secondary font-18"><i class="mdi mdi-inbox-arrow-down"></i></button>
                                                <button type="button" class="btn btn-secondary font-18"><i class="mdi mdi-alert-octagon"></i></button>
                                                <button type="button" class="btn btn-secondary font-18"><i class="mdi mdi-delete"></i></button>
                                            </div>
                                            <div class="btn-group m-b-10 m-r-10" role="group" aria-label="Button group with nested dropdown">
                                                <div class="btn-group" role="group">
                                                    <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="mdi mdi-folder font-18 "></i> </button>
                                                    <div class="dropdown-menu" aria-labelledby="btnGroupDrop1"> <a class="dropdown-item" href="#">Dropdown link</a> <a class="dropdown-item" href="#">Dropdown link</a> </div>
                                                </div>
                                                <div class="btn-group" role="group">
                                                    <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="mdi mdi-label font-18"></i> </button>
                                                    <div class="dropdown-menu" aria-labelledby="btnGroupDrop1"> <a class="dropdown-item" href="#">Dropdown link</a> <a class="dropdown-item" href="#">Dropdown link</a> </div>
                                                </div>
                                            </div>
                                            <button type="button " class="btn btn-secondary m-r-10 m-b-10"><i class="mdi mdi-reload font-18"></i></button>
                                            <div class="btn-group m-b-10" role="group">
                                                <button id="btnGroupDrop1" type="button" class="btn btn-secondary p-10 dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> More </button>
                                                <div class="dropdown-menu" aria-labelledby="btnGroupDrop1"> <a class="dropdown-item" href="#">Mark as all read</a> <a class="dropdown-item" href="#">Dropdown link</a> </div>
                                            </div>
                                        </div>
                                        <div class="card-body p-t-0">
                                            <div class="card b-all shadow-none">
                                                <div class="inbox-center table-responsive">
                                                    <table class="table table-hover no-wrap">
                                                        <tbody>
                                                            <tr class="unread">
                                                                <td style="width:40px">
                                                                    <div class="checkbox">
                                                                        <input type="checkbox" id="checkbox0" value="check">
                                                                        <label for="checkbox0"></label>
                                                                    </div>
                                                                </td>
                                                                <td style="width:40px" class="hidden-xs-down"><i class="fa fa-star-o"></i></td>
                                                                <td class="hidden-xs-down">Hritik Roshan</td>
                                                                <td class="max-texts"> <a href="app-email-detail.html" /><span class="label label-info m-r-10">Work</span> Lorem ipsum perspiciatis unde omnis iste natus error sit voluptatem</td>
                                                                <td class="hidden-xs-down"><i class="fa fa-paperclip"></i></td>
                                                                <td class="text-right"> 12:30 PM </td>
                                                            </tr>
                                                            <tr class="unread">
                                                                <td>
                                                                    <div class="checkbox">
                                                                        <input type="checkbox" id="checkbox1" value="check">
                                                                        <label for="checkbox1"></label>
                                                                    </div>
                                                                </td>
                                                                <td class="hidden-xs-down"><i class="fa fa-star text-warning"></i></td>
                                                                <td class="hidden-xs-down">Genelia Roshan</td>
                                                                <td class="max-texts"><a href="app-email-detail.html">Lorem ipsum perspiciatis unde omnis iste natus error sit voluptatem</a></td>
                                                                <td class="hidden-xs-down"><i class="fa fa-paperclip"></i></td>
                                                                <td class="text-right"> May 13 </td>
                                                            </tr>
                                                            <tr class="unread">
                                                                <td>
                                                                    <div class="checkbox">
                                                                        <input type="checkbox" id="checkbox2" value="check">
                                                                        <label for="checkbox2"></label>
                                                                    </div>
                                                                </td>
                                                                <td class="hidden-xs-down"><i class="fa fa-star-o"></i></td>
                                                                <td class="hidden-xs-down">Ritesh Deshmukh</td>
                                                                <td class="max-texts"><a href="app-email-detail.html"><span class="label label-success">Elite</span> Lorem ipsum perspiciatis unde omnis iste natus error sit voluptatem</a></td>
                                                                <td class="hidden-xs-down"><i class="fa fa-paperclip"></i></td>
                                                                <td class="text-right"> May 12 </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="checkbox">
                                                                        <input type="checkbox" id="checkbox3" value="check">
                                                                        <label for="checkbox3"></label>
                                                                    </div>
                                                                </td>
                                                                <td class="hidden-xs-down"><i class="fa fa-star-o"></i></td>
                                                                <td class="hidden-xs-down">Akshay Kumar</td>
                                                                <td class="max-texts"><a href="app-email-detail.html"><span class="label label-warning">Work</span> Lorem ipsum perspiciatis unde omnis iste natus error sit voluptatem</a></td>
                                                                <td class="hidden-xs-down"><i class="fa fa-paperclip"></i></td>
                                                                <td class="text-right"> May 12 </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="checkbox">
                                                                        <input type="checkbox" id="checkbox4" value="check">
                                                                        <label for="checkbox4"></label>
                                                                    </div>
                                                                </td>
                                                                <td class="hidden-xs-down"><i class="fa fa-star-o"></i></td>
                                                                <td class="hidden-xs-down">Hritik Roshan</td>
                                                                <td class="max-texts"><a href="app-email-detail.html"><span class="label label-info m-r-10">Work</span> Lorem ipsum perspiciatis unde omnis iste natus error sit voluptatem</a></td>
                                                                <td class="hidden-xs-down"><i class="fa fa-paperclip"></i></td>
                                                                <td class="text-right"> May 12 </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="checkbox">
                                                                        <input type="checkbox" id="checkbox5" value="check">
                                                                        <label for="checkbox5"></label>
                                                                    </div>
                                                                </td>
                                                                <td class="hidden-xs-down"><i class="fa fa-star text-warning"></i></td>
                                                                <td class="hidden-xs-down">Genelia Roshan</td>
                                                                <td class="max-texts"><a href="app-email-detail.html">Lorem ipsum perspiciatis unde omnis iste natus error sit voluptatem</a></td>
                                                                <td class="hidden-xs-down"><i class="fa fa-paperclip"></i></td>
                                                                <td class="text-right"> May 11 </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="checkbox">
                                                                        <input type="checkbox" id="checkbox6" value="check">
                                                                        <label for="checkbox6"></label>
                                                                    </div>
                                                                </td>
                                                                <td class="hidden-xs-down"><i class="fa fa-star-o"></i></td>
                                                                <td class="hidden-xs-down">Ritesh Deshmukh</td>
                                                                <td class="max-texts"><a href="app-email-detail.html"><span class="label label-success">Elite</span> Lorem ipsum perspiciatis unde omnis iste natus error sit voluptatem</a></td>
                                                                <td class="hidden-xs-down"><i class="fa fa-paperclip"></i></td>
                                                                <td class="text-right"> May 11 </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="checkbox">
                                                                        <input type="checkbox" id="checkbox7" value="check">
                                                                        <label for="checkbox7"></label>
                                                                    </div>
                                                                </td>
                                                                <td class="hidden-xs-down"><i class="fa fa-star-o"></i></td>
                                                                <td class="hidden-xs-down">Akshay Kumar</td>
                                                                <td class="max-texts"><a href="app-email-detail.html"><span class="label label-warning">Work</span> Lorem ipsum perspiciatis unde omnis iste natus error sit voluptatem</a></td>
                                                                <td class="hidden-xs-down"><i class="fa fa-paperclip"></i></td>
                                                                <td class="text-right"> May 11 </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="checkbox">
                                                                        <input type="checkbox" id="checkbox8" value="check">
                                                                        <label for="checkbox8"></label>
                                                                    </div>
                                                                </td>
                                                                <td class="hidden-xs-down"><i class="fa fa-star-o"></i></td>
                                                                <td class="hidden-xs-down">Hritik Roshan</td>
                                                                <td class="max-texts"><a href="app-email-detail.html"><span class="label label-info m-r-10">Work</span> Lorem ipsum perspiciatis unde omnis iste natus error sit voluptatem</a></td>
                                                                <td class="hidden-xs-down"><i class="fa fa-paperclip"></i></td>
                                                                <td class="text-right"> May 10 </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="checkbox">
                                                                        <input type="checkbox" id="checkbox9" value="check">
                                                                        <label for="checkbox9"></label>
                                                                    </div>
                                                                </td>
                                                                <td class="hidden-xs-down"><i class="fa fa-star text-warning"></i></td>
                                                                <td class="hidden-xs-down">Genelia Roshan</td>
                                                                <td class="max-texts"><a href="app-email-detail.html">Lorem ipsum perspiciatis unde omnis iste natus error sit voluptatem</a></td>
                                                                <td class="hidden-xs-down"><i class="fa fa-paperclip"></i></td>
                                                                <td class="text-right"> May 10 </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="checkbox">
                                                                        <input type="checkbox" id="checkbox10" value="check">
                                                                        <label for="checkbox10"></label>
                                                                    </div>
                                                                </td>
                                                                <td class="hidden-xs-down"><i class="fa fa-star-o"></i></td>
                                                                <td class="hidden-xs-down">Ritesh Deshmukh</td>
                                                                <td class="max-texts"><a href="app-email-detail.html"><span class="label label-success">Elite</span> Lorem ipsum perspiciatis unde omnis iste natus error sit voluptatem</a></td>
                                                                <td class="hidden-xs-down"><i class="fa fa-paperclip"></i></td>
                                                                <td class="text-right"> May 10 </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="checkbox">
                                                                        <input type="checkbox" id="checkbox11" value="check">
                                                                        <label for="checkbox11"></label>
                                                                    </div>
                                                                </td>
                                                                <td class="hidden-xs-down"><i class="fa fa-star-o"></i></td>
                                                                <td class="hidden-xs-down">Akshay Kumar</td>
                                                                <td class="max-texts"><a href="app-email-detail.html"><span class="label label-warning">Work</span> Lorem ipsum perspiciatis unde omnis iste natus error sit voluptatem</a></td>
                                                                <td class="hidden-xs-down"><i class="fa fa-paperclip"></i></td>
                                                                <td class="text-right"> May 09 </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="checkbox m-t-0 m-b-0">
                                                                        <input type="checkbox" id="checkbox12" value="check">
                                                                        <label for="checkbox12"></label>
                                                                    </div>
                                                                </td>
                                                                <td class="hidden-xs-down"><i class="fa fa-star-o"></i></td>
                                                                <td class="hidden-xs-down">Hritik Roshan</td>
                                                                <td class="max-texts"><a href="app-email-detail.html"><span class="label label-info m-r-10">Work</span> Lorem ipsum perspiciatis unde omnis iste natus error sit voluptatem</a></td>
                                                                <td class="hidden-xs-down"><i class="fa fa-paperclip"></i></td>
                                                                <td class="text-right"> May 09 </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="checkbox">
                                                                        <input type="checkbox" id="checkbox13" value="check">
                                                                        <label for="checkbox13"></label>
                                                                    </div>
                                                                </td>
                                                                <td class="hidden-xs-down"><i class="fa fa-star text-warning"></i></td>
                                                                <td class="hidden-xs-down">Genelia Roshan</td>
                                                                <td class="max-texts"><a href="app-email-detail.html">Lorem ipsum perspiciatis unde omnis iste natus error sit voluptatem</a></td>
                                                                <td class="hidden-xs-down"><i class="fa fa-paperclip"></i></td>
                                                                <td class="text-right"> May 09 </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="checkbox">
                                                                        <input type="checkbox" id="checkbox14" value="check">
                                                                        <label for="checkbox14"></label>
                                                                    </div>
                                                                </td>
                                                                <td class="hidden-xs-down"><i class="fa fa-star-o"></i></td>
                                                                <td class="hidden-xs-down">Ritesh Deshmukh</td>
                                                                <td class="max-texts"><a href="app-email-detail.html"><span class="label label-success">Elite</span> Lorem ipsum perspiciatis unde omnis iste natus error sit voluptatem</a></td>
                                                                <td class="hidden-xs-down"><i class="fa fa-paperclip"></i></td>
                                                                <td class="text-right"> May 09 </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
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
