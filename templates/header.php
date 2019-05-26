<?php 
ob_start();
session_start();
date_default_timezone_set("America/Argentina");
require_once 'templates/include.php';
require_once 'funcion.php'; 
require_once 'config.php';
require_once 'ip.php';
if(!isset($_SESSION['logged_in'])){
	header('Location: index.php');
}
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="JKDev">
        <title>AstralCHecker | BETA</title>
            <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
        <!-- Bootstrap -->
        <link rel="stylesheet" href="../vendor/fontawesome/css/all.css"/>
        <link rel="stylesheet" href="../vendor/animate.css/animate.css"/>
        <link rel="stylesheet" href="../vendor/bootstrap/css/bootstrap.css"/>
        <link rel="stylesheet" href="../vendor/toastr/toastr.min.css"/>
        <!-- App -->

        <link rel="stylesheet" href="../styles/pe-icons/pe-icon-7-stroke.css"/>
        <link rel="stylesheet" href="../styles/pe-icons/helper.css"/>
        <link rel="stylesheet" href="../styles/stroke-icons/style.css"/>
        <link rel="stylesheet" href="../styles/style.css">
        <style>
            .mKey-f{border:0px solid;background-color:transparent;color:white}
        </style>
    </head>
 <body>
    <div class="wrapper">
        <nav class="navbar navbar-expand-md navbar-default fixed-top">
            <div class="navbar-header">
                <div id="mobile-menu">
                    <div class="left-nav-toggle">
                        <a href="#">
                            <i class="stroke-hamburgermenu"></i>
                        </a>
                    </div>
                </div>
                <a class="navbar-brand" href="sobre.php">
                    ASTRAL
                    <span>v.1</span>
                </a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <div class="left-nav-toggle">
                    <a href="#">
                        <i class="stroke-hamburgermenu"></i>
                    </a>
                </div>
                <form class="navbar-form mr-auto">
                    <input type="text" class="form-control" placeholder="Search data for analysis" style="width: 175px">
                </form>
                <ul class="nav navbar-nav">
                    <li class="nav-item uppercase-link">
                        <a href="#" class="nav-link" data-toggle="modal" data-target="#rangoModal">Rango
                            <span class="label label-warning"><?php require_once 'funcionLevel.php'; ?></span>
                        </a>
                    </li>
                    <li class="nav-item uppercase-link">
                        <a href="#" class="nav-link">Creditos
                            <span class="label label-warning"><?php echo $_SESSION['creditos']; ?></span>
                        </a>
                    </li>
                    <li class="nav-item profil-link dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="profile-address">
                                <?php if($_SESSION['logged_in']) { ?>
				<?php echo $_SESSION['name']; ?></span>
                            <img src="images/profile.jpg" class="rounded-circle" alt="">
                        </a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="#">Perfil <i class="fas fa-user"></i></a>
                            <a class="dropdown-item" href="#">Configuración <i class="fas fa-cog"></i></a>
                            <a class="dropdown-item text-info" href="#"><?php echo $MyipAddress;?> <i class="fas fa-eye"></i></a>
                            <a class="dropdown-item" href="#"><?php echo date("d/m/y"); ?> <i class="far fa-calendar"></i></a>
                            <a class="dropdown-item" href="#"><?php require_once 'funcionLevel.php';  ?></a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Admin Panel <i class="fas fa-user-shield"></i></a>
                            <a class="dropdown-item" href="logout.php">Salir <i class="fas fa-sign-out-alt"></i></a>
                            <?php } ?>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    
        
        <aside class="navigation">
        <nav>
            <?php $uri = end( explode("/",$_SERVER['REQUEST_URI'])); ?>
            <ul class="nav luna-nav">
                <li class="nav-category">
                    
                </li>
              
                <li class="active"<?php if($uri == 'home.php'); ?>><a href="home.php">Inicio</a>
                </li>
                <li class="nav-category">
                    ASTRAL CHECKER
                </li>
                <li>
                    <a href="#gates" data-toggle="collapse" aria-expanded="false">
                        GATES <span class="sub-nav-icon"> <i class="stroke-arrow"></i> </span>
                    </a>
                    <ul id="gates" class="nav nav-second collapse">
                        <li><a href="#">SoulGate <i class="far fa-check-circle"></i></a></li>
                        <li><a href="#">BreakICE <i class="far fa-check-circle"></i></a></li>
                    </ul>
                </li>
                <li>
                    <a href="#herramientas" data-toggle="collapse" aria-expanded="false">
                        HERRAMIENTAS <span class="sub-nav-icon"> <i class="stroke-arrow"></i> </span>
                    </a>
                    <ul id="herramientas" class="nav nav-second collapse">
                        <li><a href="#">Extrapolar <i class="fas fa-cog"></i></a></li>
                        <li><a href="#">Proxy Checker <i class="fas fa-cog"></i></a></li>
                        <li><a href="#">Buscar BIN <i class="fas fa-cog"></i></a></li>
                    </ul>
                </li>
                <li class="nav-info">
                    
                    
                    <div class="m-t-xs">
                        <span class="c-white">ASTRALCHECKER</span><br />
                        Tu IP: <?php echo $MyipAddress;?><br />
                        <hr>
                       <i class="fas fa-user-secret text-accent"></i> <i class="fab fa-telegram"></i>
                    </div>
                </li>
            </ul>
        </nav>
    </aside>    
        
<!-- End wrapper-->