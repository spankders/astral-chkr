<?php require_once 'templates/header.php';?>

<!-- Main content-->
    <section class="content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-12">
                    <div class="view-header">
                        <div class="pull-right text-right" style="line-height: 14px">
                            <small><span class="c-white">Cambios del checker Aqui:</span></small>
                            <br>
                            <small><span class="c-grey">Adaptación de nuevo template.</span></small>
                        </div>
                        <div class="header-icon">
                            <i class="pe page-header-icon pe-7s-shield"></i>
                        </div>
                        <div class="header-title">
                            <h3 class="m-b-xs">ASTRAL CHECKER</h3>
                            <small>
                                Gates/Herramientas Publicas & Privadas.
                            </small>
                        </div>
                    </div>
                    <hr>
                </div>
            </div>

            <div class="row">

                <div class="col-lg-2 col-xs-6">
                    <div class="panel panel-filled">

                        <div class="panel-body text-center">
                            <h2 class="m-b-none">
                              2<span class="ld-loading"><i class="fa fa-user"> </i></span>
                            </h2>

                            <div class="small text-warning">USUARIOS</div>
                            <div class="slight m-t-sm"><i class="fas fa-clock-o">

                           </i> Update: <span class="c-white"><?php echo date("H:i"); ?></span></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-xs-6">
                    <div class="panel panel-filled">

                        <div class="panel-body text-center">
                            <h2 class="m-b-none">
                                <?php echo $_SESSION['creditos']; ?><span class="ld-loading"><i class="fas fa-coins"></i></span>
                            </h2>
                            <div class="small text-warning">CREDITOS</div>
                            <div class="slight m-t-sm"><i class="fa fa-clock-o"> </i> Update: <span class="c-white"><?php echo date("H:i"); ?></span></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-xs-6">
                    <div class="panel panel-filled">

                        <div class="panel-body text-center">
                            <h2 class="m-b-none">
                                2<span class="ld-loading"><i class="fas fa-rocket"></i></span>
                            </h2>
                            <div class="small text-warning">GATES</div>
                            <div class="slight m-t-sm"><i class="fa fa-clock-o"> </i> Update: <span class="c-white"><?php echo date("H:i"); ?></span></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-xs-6">
                    <div class="panel panel-filled">

                        <div class="panel-body text-center">
                            <h2 class="m-b-none">
                                2<span class="ld-loading"><i class="fas fa-users"></i></span>
                            </h2>
                            <div class="small text-warning">STAFF</div>
                            <div class="slight m-t-sm"><i class="fa fa-clock-o"> </i> Update: <span class="c-white"><?php echo date("H:i"); ?></span></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-xs-8">
                    <div class="panel panel-filled">

                        <div class="panel panel-filled text-center">
                            <h2 class="m-b-none">
                                <span class="ld-loading"><i class="fas fa-donate"></i></span>
                            </h2>
                            <div class="large text-warning"><a href="#">COMPRAR CREDITOS</a></div>
                            <div class="slight m-t-sm"><i class="fa fa-clock-o"> </i> <span class="c-white">Ahora puedes comprar tus <u>CREDITOS</u> de manera fácil y rápida!</span></div>
                        </div>
                    </div>
                </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="panel">
                    <div class="col-md-12">
                        <div class="panel panel-filled">

                            <div class="panel-body">

                                <div class="row">
                                    <div class="col-md-6">
                                        
                                            
                                            <h2 class="m-t-xs m-b-none">
                                                Bienvenido <span class="c-accent"><u><?php echo $_SESSION['name']; ?></span></u>
                                            </h2>
                                            <small>
                                                <?php echo $_SESSION['descripcion']; ?>
                                            </small>
                                       Tu descripción estaria aquí
                                    </div>
                                    <div class="col-md-3">
                                        <table class="table small m-t-sm">
                                            <tbody>
                                            <tr>
                                                <td>
                                                    <strong class="c-white"><?php echo $_SESSION['creditos']; ?></strong> Creditos
                                                </td>
                                                <td>
                                                    <strong class="c-white">0/0</strong> LIVES
                                                </td>

                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong class="c-white"><?php echo $_SESSION['level']; ?></strong> LEVEL
                                                </td>
                                                

                                                <td>
                                                    <strong class="c-white">0/0</strong> API
                                                </td>
                                            </tr>
                                            <tr>
                                                <script type="text/javascript">
                                                function mostrarKey(){
                                                                var cambio = document.getElementById("mKey");
                                                                if(cambio.type == "password"){
                                                                        cambio.type = "text";
                                                                        $('.icon').removeClass('far fa-eye-slash').addClass('far fa-eye');
                                                                }else{
                                                                        cambio.type = "password";
                                                                        $('.icon').removeClass('far fa-eye').addClass('far fa-eye-slash');
                                                                }
                                                        } 

                                                        $(document).ready(function () {
                                                        $('#MostrarKey').click(function () {
                                                                $('#Password').attr('type', $(this).is(':checked') ? 'text' : 'password');
                                                        });
                                                });
                                                </script>
                                                 <td colspan="3" style="text-align:right;">
                                                    <input id="mKey" type="Password" class="mKey-f" value="<?php echo $_SESSION['key_asc']; ?>"></input>
                                                    <button id="mostrar_key" class="btn btn-link" type="button" onclick="mostrarKey()">
                                                       <span class="far fa-eye-slash icon"></span>
                                                    </button>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="col-md-3 m-t-sm">
                                    <span class="c-white">
                                        <?php echo $_SESSION['email']; ?>
                                    </span>
                                        <br>
                                        <small>
                                            Nunca le des información de tu cuenta a <b>NADIE!</b>, ningún <u>administrador</u> o parte del staff te pedira datos de tu cuenta.
                                        </small>
                                        <div class="btn-group m-t-sm">
                                            <a href="#" class="btn btn-default btn-sm"><i class="fas fa-bug"></i> BUGS</a>
                                            <a href="#" class="btn btn-default btn-sm"><i class="fas fa-headset"></i> SUPPORT</a>
                                        </div>


                                    </div>


                                </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- End main content-->

</div>
<?php require_once 'templates/footer.php';?>
