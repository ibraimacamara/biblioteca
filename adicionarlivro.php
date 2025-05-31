<?php
include("conexao.php");

$query = "SELECT * FROM livros";
$result = $conexao->query($query);
session_start();
if (isset($_SESSION['nome'])) {
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <title>GURU Able - Free Lite Admin Template </title>
    <!-- HTML5 Shim and Respond.js IE9 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="CodedThemes">
    <meta name="keywords"
        content="flat ui, admin  Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="CodedThemes">
    <!-- Favicon icon -->
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,800" rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap/css/bootstrap.min.css">
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="assets/icon/themify-icons/themify-icons.css">
    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="assets/icon/icofont/css/icofont.css">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="assets/css/jquery.mCustomScrollbar.css">
</head>

<body>
    <!-- Pre-loader start -->
    <div class="theme-loader">
        <div class="ball-scale">
            <div class='contain'>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pre-loader end -->
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">
            <nav class="navbar header-navbar pcoded-header">
                <div class="navbar-wrapper">
                    <div class="navbar-logo">
                        <a class="mobile-menu" id="mobile-collapse" href="#!">
                            <i class="ti-menu"></i>
                        </a>
                        <a class="mobile-search morphsearch-search" href="#">
                            <i class="ti-search"></i>
                        </a>
                        <a href="index.php">
                            <img class="img-fluid" src="uploads/" alt="Theme-Logo" />
                        </a>
                        <a class="mobile-options">
                            <i class="ti-more"></i>
                        </a>
                    </div>
                    <div class="navbar-container container-fluid">
                        <ul class="nav-left">
                            <li>
                                <div class="sidebar_toggle"><a href="javascript:void(0)"><i class="ti-menu"></i></a>
                                </div>
                            </li>
                            <li>
                                <a href="#!" onclick="javascript:toggleFullScreen()">
                                    <i class="ti-fullscreen"></i>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav-right">
                            <li class="header-notification">
                                <a href="#!">
                                    <i class="ti-bell"></i>
                                    <span class="badge bg-c-pink"></span>
                                </a>
                                <ul class="show-notification">
                                    <li>
                                        <h6>Notifications</h6>
                                        <label class="label label-danger">New</label>
                                    </li>
                                    <li>
                                        <div class="media">
                                            <img class="d-flex align-self-center" src="assets/images/user.png"
                                                alt="Generic placeholder image">
                                            <div class="media-body">
                                                <h5 class="notification-user">John Doe</h5>
                                                <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer
                                                    elit.</p>
                                                <span class="notification-time">30 minutes ago</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="media">
                                            <img class="d-flex align-self-center" src="assets/images/user.png"
                                                alt="Generic placeholder image">
                                            <div class="media-body">
                                                <h5 class="notification-user">Joseph William</h5>
                                                <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer
                                                    elit.</p>
                                                <span class="notification-time">30 minutes ago</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="media">
                                            <img class="d-flex align-self-center" src="assets/images/user.png"
                                                alt="Generic placeholder image">
                                            <div class="media-body">
                                                <h5 class="notification-user">Sara Soudein</h5>
                                                <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer
                                                    elit.</p>
                                                <span class="notification-time">30 minutes ago</span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="user-profile header-notification">
                                <a href="#!">
                                    <img src="assets/images/avatar-4.jpg" class="img-radius" alt="User-Profile-Image">
                                    <span>John Doe</span>
                                    <i class="ti-angle-down"></i>
                                </a>
                                <ul class="show-notification profile-notification">
                                    <li>
                                        <a href="#!">
                                            <i class="ti-settings"></i> Settings
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="ti-user"></i> Profile
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="ti-email"></i> My Messages
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="ti-lock"></i> Lock Screen
                                        </a>
                                    </li>
                                    <li>
                                        <a href="login.php">
                                            <i class="ti-layout-sidebar-left"></i> Logout
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    <?php include "menu.php"; ?>
                    <div class="pcoded-content">
                        <div class="pcoded-inner-content">
                            <div class="main-body">
                                <div class="page-wrapper">
                                    <!-- Page-header start -->
                                    <div class="page-header card">
                                        <div class="row align-items-end">
                                            <div class="col-lg-8">
                                                <div class="page-header-title">
                                                    <i
                                                        class="icofont icofont icofont icofont-file-document bg-c-pink"></i>
                                                    <div class="d-inline">
                                                        <h4>Inserir Livros</h4>
                                                        <span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="page-header-breadcrumb">
                                                    <ul class="breadcrumb-title">
                                                        <li class="breadcrumb-item">
                                                            <a href="home.php">
                                                                <i class="icofont icofont-home"></i>
                                                            </a>
                                                        </li>
                                                        <li class="breadcrumb-item"><a href="#!">Pages</a>
                                                        </li>
                                                        <li class="breadcrumb-item"><a href="#!">Sample page</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Page-header end -->

                                    <div class="page-body">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>Ola Admistradora</h5>
                                                        <span>antes de submeter garante que todos os campos estão
                                                            preechedo </span>
                                                        <div class="card-header-right">
                                                            <ul class="list-unstyled card-option" style="width: 35px;">
                                                                <li class=""><i class="icofont icofont-simple-left"></i>
                                                                </li>
                                                                <li><i class="icofont icofont-maximize full-card"></i>
                                                                </li>
                                                                <li><i class="icofont icofont-minus minimize-card"></i>
                                                                </li>
                                                                <li><i class="icofont icofont-refresh reload-card"></i>
                                                                </li>
                                                                <li><i class="icofont icofont-error close-card"></i>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="card-block">
                               
                                                           
                                                            <!-- Tab panes -->
                                                            <div class="tab-content card-block">
                                                                <div class="tab-pane active" id="home8" role="tabpanel">
                                                                    <p class="text-center m-0">
                                                                    <div class="card-block"></div>
                                                                    <h4 class="sub-title">Adicionar Livros</h4>
                                                                    <form action="add-controlo.php" method="post"
                                                                        enctype="multipart/form-data">

                                                                        <div class="form-group row">
                                                                            <label class="col-sm-2 col-form-label">Autor</label>
                                                                            <div class="col-sm-4">
                                                                                <input type="text" name="autor" class="form-control" placeholder="Autor">
                                                                            </div>
                                                                            <label class="col-sm-2 col-form-label">Material Acompanhante</label>
                                                                            <div class="col-sm-4">
                                                                                <input type="text" name="material_acompanhante" class="form-control" placeholder="Material acompanhante">
                                                                            </div>
                                                                        </div>

                                                                        <div class="form-group row">
                                                                            <label
                                                                                class="col-sm-2 col-form-label">Título</label>
                                                                            <div class="col-sm-4">
                                                                                <input type="text" name="titulo"
                                                                                    class="form-control"
                                                                                    placeholder="O título do livro">
                                                                            </div>
                                                                            <label
                                                                                class="col-sm-2 col-form-label">Volume</label>
                                                                            <div class="col-sm-4">
                                                                                <input type="text" name="volume"
                                                                                    class="form-control"
                                                                                    placeholder="Volume">
                                                                            </div>
                                                                        </div>


                                                                        <div class="form-group row">
                                                                            <label
                                                                                class="col-sm-2 col-form-label">Editor</label>
                                                                            <div class="col-sm-4">
                                                                                <input type="text" name="editor"
                                                                                    class="form-control"
                                                                                    placeholder="Editor">
                                                                            </div>
                                                                
                                                                            <label class="col-sm-2 col-form-label">Local
                                                                                da Edição</label>
                                                                            <div class="col-sm-4">
                                                                                <input type="text" name="local_edicao"
                                                                                    class="form-control"
                                                                                    placeholder="Local de edição">
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label
                                                                                class="col-sm-2 col-form-label">Estante</label>
                                                                            <div class="col-sm-4">
                                                                                <input type="text" name="estante"
                                                                                    class="form-control"
                                                                                    placeholder="Estante">
                                                                            </div>
                                                                
                                                                            <label class="col-sm-2 col-form-label">Prateleira
                                                                                </label>
                                                                            <div class="col-sm-4">
                                                                                <input type="text" name="prateleira"
                                                                                    class="form-control"
                                                                                    placeholder="Prateleira">
                                                                            </div>
                                                                        </div>

                                                                        <div class="form-group row">
                                                                            <label
                                                                                class="col-sm-2 col-form-label">ISBN</label>
                                                                            <div class="col-sm-10">
                                                                                <input type="number" name="isbn"
                                                                                    class="form-control"
                                                                                    placeholder="ISBN">
                                                                            </div>
                                                                        </div>

                                                                        <div class="form-group row">
                                                                            <label
                                                                                class="col-sm-2 col-form-label">Sinopse</label>
                                                                            <div class="col-sm-10">
                                                                                <textarea rows="5" name="sinopse"
                                                                                    class="form-control"
                                                                                    placeholder="Sinopse"></textarea>
                                                                            </div>
                                                                        </div>


                                                                        <div class="form-group row">
                                                                            <label class="col-sm-2 col-form-label">Data
                                                                                de Entrada</label>
                                                                            <div class="col-sm-10">
                                                                                <input type="date" name="data_entrada"
                                                                                    class="form-control">
                                                                            </div>
                                                                        </div>

                                                                        <div class="form-group row">
                                                                            <label class="col-sm-2 col-form-label">Modo
                                                                                de Aquisição</label>
                                                                            <div class="col-sm-5">
                                                                                <input type="radio" class="btn-check" name="modo_aquisicao" id="compra" value="Compra" autocomplete="off" checked>
                                                                                <label class="btn btn-outline-primary" for="compra">Compra</label>
                                                                                <input type="radio" class="btn-check" name="modo_aquisicao" id="oferta" value="Oferta" autocomplete="off">
                                                                                <label class="btn btn-outline-primary" for="oferta">Oferta</label>
                                                                            </div>
                                                                            
                                                                        </div>

                                                                        <div class="form-group row">
                                                                            <label class="col-sm-2 col-form-label">Foto
                                                                                da Capa</label>
                                                                            <div class="col-sm-10">
                                                                                <input type="file" name="foto"
                                                                                    class="form-control">
                                                                            </div>
                                                                        </div>

                                                                        


                                                                        <!-- Botão de envio -->
                                                                        <div class="form-group row">
                                                                            <div class="col-sm-10 offset-sm-2">
                                                                                <button type="submit"
                                                                                    class="btn btn-success">Adicionar
                                                                                    Livro</button>
                                                                            </div>
                                                                        </div>
                                                                    </form>
                                                                    </p>
                                                                </div>
                                                                
                                                                
                                                            </div>
                                                        </div>

                                                        <!--------tabs--------------->



                                                        <!-- form start-->

                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Basic Form Inputs card end -->
                                            <!-- Form end -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="styleSelector">
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>

    <!--pop up pra pedir pro
    <div class="fixed-button">
        <a href="https://codedthemes.com/item/guru-able-admin-template/" target="_blank" class="btn btn-md btn-primary">
            <i class="fa fa-shopping-cart" aria-hidden="true"></i> Upgrade To Pro
        </a>
    </div>
    -->

    <!-- Warning Section Starts -->
    <!-- Older IE warning message -->
    <!--[if lt IE 9]>
<div class="ie-warning">
    <h1>Warning!!</h1>
    <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers
        to access this website.</p>
    <div class="iew-container">
        <ul class="iew-download">
            <li>
                <a href="http://www.google.com/chrome/">
                    <img src="assets/images/browser/chrome.png" alt="Chrome">
                    <div>Chrome</div>
                </a>
            </li>
            <li>
                <a href="https://www.mozilla.org/en-US/firefox/new/">
                    <img src="assets/images/browser/firefox.png" alt="Firefox">
                    <div>Firefox</div>
                </a>
            </li>
            <li>
                <a href="http://www.opera.com">
                    <img src="assets/images/browser/opera.png" alt="Opera">
                    <div>Opera</div>
                </a>
            </li>
            <li>
                <a href="https://www.apple.com/safari/">
                    <img src="assets/images/browser/safari.png" alt="Safari">
                    <div>Safari</div>
                </a>
            </li>
            <li>
                <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                    <img src="assets/images/browser/ie.png" alt="">
                    <div>IE (9 & above)</div>
                </a>
            </li>
        </ul>
    </div>
    <p>Sorry for the inconvenience!</p>
</div>
<![endif]-->
    <!-- Warning Section Ends -->
    <!-- Required Jquery -->
    <script type="text/javascript" src="assets/js/jquery/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery-ui/jquery-ui.min.js"></script>
    <script type="text/javascript" src="assets/js/popper.js/popper.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap/js/bootstrap.min.js"></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="assets/js/jquery-slimscroll/jquery.slimscroll.js"></script>
    <!-- modernizr js -->
    <script type="text/javascript" src="assets/js/modernizr/modernizr.js"></script>
    <script type="text/javascript" src="assets/js/modernizr/css-scrollbars.js"></script>
    <!-- classie js -->
    <script type="text/javascript" src="assets/js/classie/classie.js"></script>
    <!-- Custom js -->
    <script type="text/javascript" src="assets/js/script.js"></script>
    <script src="assets/js/pcoded.min.js"></script>
    <script src="assets/js/demo-12.js"></script>
    <script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
</body>

</html>
<?php $conexao->close(); 

} else {
  header("Location: login.php");
  exit();
}?>