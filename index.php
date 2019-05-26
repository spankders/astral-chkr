<?php 
ob_start();
session_start();
require_once 'config.php'; 
?>
<?php 
	if( !empty( $_POST )){
		try {
			$user_obj = new Cl_User();
			$data = $user_obj->login( $_POST );
			if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']){
				header('Location: home.php');
			}
		} catch (Exception $e) {
			$error = $e->getMessage();
		}
	}
	//print_r($_SESSION);
	if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']){
		header('Location: home.php');
	}
?>
<!DOCTYPE html>
<html>

<!-- Template Nulled for SkarYxD -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900' rel='stylesheet' type='text/css'>

    <!-- Page title -->
    <title>.::LOGIN | ASTRAL CHECKER::.</title>

    <!-- Vendor styles -->
    <link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.css"/>
    <link rel="stylesheet" href="vendor/animate.css/animate.css"/>
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.css"/>

    <!-- App styles -->
    <link rel="stylesheet" href="styles/pe-icons/pe-icon-7-stroke.css"/>
    <link rel="stylesheet" href="styles/pe-icons/helper.css"/>
    <link rel="stylesheet" href="styles/stroke-icons/style.css"/>
    <link rel="stylesheet" href="styles/style.css">
</head>
<body class="blank">

<!-- Wrapper-->
<div class="wrapper">


    <!-- Main content-->
    <section class="content">
        <div class="container-center animated slideInDown">


            <div class="view-header">
                <div class="header-icon">
                    <i class="pe page-header-icon pe-7s-unlock"></i>
                </div>
                <div class="header-title">
                    <h3>Login | AstralChecker</h3>
                    <small>
                        Ingresar sus datos para poder ingresar.
                    </small>
                </div>
            </div>

            <div class="panel panel-filled">
                <div class="panel-body">
                    <form id="login-form" method="post" role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" autocomplete="off">
                        <?php require_once 'templates/message.php';?>
                        <div class="form-group">
                            <input type="text" name="email" id="email" class="form-control required" style="width: 100%" class="col-form-label" placeholder="Correo electrónico" autocomplete="nope"> 
                            <!--<span class="form-text small">Correo</span>-->
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" id="password" class="form-control password required col-form-label" style="width: 100%">
                            <!--<span class="form-text small">Contraseña</span>-->
                        </div>
                        <div class="form-group">
                            <input type="key_asc" name="key_asc" id="key_asc" class="form-control required" style="width: 100%" placeholder="AST-000-000" required> 
                            <!--<span class="form-text small">Key</span>-->
                        </div>
                        <div>
                            <button class="btn btn-info" type="submit" id="submit_btn" data-loading-text="Iniciando....">Iniciar sesión</button>
                            <a class="btn btn-default" href="#">Registrar</a>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </section>
    <!-- End main content-->

</div>
<!-- End wrapper-->

<!-- Vendor scripts -->
<script src="vendor/pacejs/pace.min.js"></script>
<script src="vendor/jquery/dist/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>

<!-- App scripts -->
<script src="https://terrylinooo.github.io/jquery.disableAutoFill/assets/js/jquery.disableAutoFill.min.js"></script>
<script src="scripts/luna.js"></script>
<script src="js/jquery.validate.min.js"></script>
<script src="js/login.js"></script>
</body>
</html>
<?php ob_end_flush(); ?>