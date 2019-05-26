<?php 
ob_start();
session_start();
date_default_timezone_set("America/Argentina");
require_once 'templates/include.php';
require_once 'funcion.php'; 
require_once 'config.php'; 
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
                <a class="navbar-brand" href="index.html">
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
                        <a href="#" class="nav-link">Rango
                            <span class="label label-warning"><?php echo $_SESSION['level']; ?></span>
                        </a>
                    </li>
                    <li class="nav-item uppercase-link">
                        <a href="#" class="nav-link">Creditos
                            <span class="label label-warning"><?php echo $_SESSION['creditos']; ?></span>
                        </a>
                    </li>
                    <li class="nav-item profil-link">
                        <a href="logout.php">
                            <span class="profile-address">
                                <?php if($_SESSION['logged_in']) { ?>
				<?php echo $_SESSION['name']; ?></span>
                            <img src="images/profile.jpg" class="rounded-circle" alt="">
                        </a>
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
                
                <li>
                    <a href="#monitoring" data-toggle="collapse" aria-expanded="false">
                        Monitoring<span class="sub-nav-icon"> <i class="stroke-arrow"></i> </span>
                    </a>
                    <ul id="monitoring" class="nav nav-second collapse">
                        <li><a href="metrics.html"> Metrics</a></li>
                        <li><a href="usage.html"> Usage</a></li>
                        <li><a href="activity.html"> Activity</a></li>
                    </ul>
                </li>
                <li class="nav-category">
                    UI Elements
                </li>
                <li>
                    <a href="#uielements" data-toggle="collapse" aria-expanded="false">
                        General<span class="sub-nav-icon"> <i class="stroke-arrow"></i> </span>
                    </a>
                    <ul id="uielements" class="nav nav-second collapse">
                        <li><a href="panels.html">Panels</a></li>
                        <li><a href="typography.html">Typography</a></li>
                        <li><a href="icons.html">Icons</a></li>
                        <li><a href="buttons.html">Buttons</a></li>
                        <li><a href="tabs.html">Tabs</a></li>
                        <li><a href="modals.html">Modals</a></li>
                        <li><a href="alerts.html">Alerts</a></li>
                        <li><a href="loaders.html">Loaders</a></li>
                        <li><a href="gridSystem.html">Grid system</a></li>
                        <li><a href="draggable.html">Draggable</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#tables" data-toggle="collapse" aria-expanded="false">
                        Tables design<span class="sub-nav-icon"> <i class="stroke-arrow"></i> </span>
                    </a>
                    <ul id="tables" class="nav nav-second collapse">
                        <li><a href="tableStyles.html">Table styles</a></li>
                        <li><a href="dataTables.html">Data Tables</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#forms" data-toggle="collapse" aria-expanded="false">
                        From controls <span class="sub-nav-icon"> <i class="stroke-arrow"></i> </span>
                    </a>
                    <ul id="forms" class="nav nav-second collapse">
                        <li><a href="formElements.html"> Basic elements </a></li>
                        <li><a href="autocomplete.html"> Autocomplete </a></li>
                        <li><a href="controls.html"> Selection controls </a></li>
                        <li><a href="textEditor.html"> Text editor </a></li>
                    </ul>
                </li>
                <li>
                    <a href="#charts" data-toggle="collapse" aria-expanded="false">
                        Charts and graphs<span class="sub-nav-icon"> <i class="stroke-arrow"></i> </span>
                    </a>
                    <ul id="charts" class="nav nav-second collapse">
                        <li><a href="flotCharts.html">Flot charts</a></li>
                        <li><a href="chartJs.html">ChartJS</a></li>
                        <li><a href="sparkline.html">Sparkline</a></li>
                        <li><a href="datamaps.html">Datamaps</a></li>
                    </ul>
                </li>

                <li class="nav-category">
                    App Pages
                </li>
                <li>
                    <a href="#extras" data-toggle="collapse" aria-expanded="false">
                        Basic <span class="sub-nav-icon"> <i class="stroke-arrow"></i> </span>
                    </a>
                    <ul id="extras" class="nav nav-second collapse">
                        <li><a href="profile.html">Profile</a></li>
                        <li><a href="contacts.html">Contacts</a></li>
                        <li><a href="projects.html">Projects</a></li>
                        <li><a href="support.html">Support</a></li>
                        <li><a href="nestableList.html">List</a></li>
                        <li><a href="timeline.html">Timeline</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#common" data-toggle="collapse" aria-expanded="false">
                        Common <span class="sub-nav-icon"> <i class="stroke-arrow"></i> </span>
                    </a>
                    <ul id="common" class="nav nav-second collapse">
                        <li><a href="login.html">Login</a></li>
                        <li><a href="register.html">Register</a></li>
                        <li><a href="forgotPassword.html">Forgot password</a></li>
                        <li><a href="error.html">Error page</a></li>
                    </ul>
                </li>
                <li class="nav-info">
                    
                    <?php } ?>
                    <div class="m-t-xs">
                        <span class="c-white">ASTRALCHECKER</span>
                        <i class="pe pe-7s-shield text-accent"></i>
                    </div>
                </li>
            </ul>
        </nav>
    </aside>    
        
<!-- End wrapper-->