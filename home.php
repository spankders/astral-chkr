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
                               <?php echo $_SESSION['users']; ?><span class="ld-loading"><i class="fa fa-user"> </i></span>
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
                        <div class="panel-body">
                            <h2 class="m-b-none">
                                262 <span class="slight"><i class="fa fa-play fa-rotate-270 text-warning"> </i> +56%</span>
                            </h2>

                            <div class="small">Total users</div>
                            <div class="slight m-t-sm"><i class="fa fa-clock-o"> </i> Updated: <span class="c-white">05:42pm</span></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-xs-6">
                    <div class="panel panel-filled">
                        <div class="panel-body">
                            <h2 class="m-b-none">
                                62% <span class="slight"><i class="fa fa-play fa-rotate-270 text-warning"> </i> +18%</span>
                            </h2>

                            <div class="small">Bounce Rate</div>
                            <div class="slight m-t-sm"><i class="fa fa-clock-o"> </i> Updated: <span class="c-white">04:00am</span></div>
                        </div>
                    </div>
                </div>


                <div class="col-lg-4 col-xs-12">
                    <div class="panel panel-filled" style="position:relative;height: 114px">
                        <div style="position: absolute;bottom: 0;left: 0;right: 0">
                            <span class="sparkline"></span>
                        </div>
                        <div class="panel-body">
                            <div class="m-t-sm">
                                <div class="pull-right">
                                    <a href="#" class="btn btn-default btn-xs">+Creditos</a>
                                </div>
                                <div class="c-white"><span class="label label-accent">Creditos</span> 
                                    
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="panel">
                        <div class="row">
                            <div class="col-md-4">

                                <div class="panel-body h-200 list">
                                    <div class="stats-title">
                                        <h4><i class="fa fa-bar-chart text-warning" aria-hidden="true"></i> Traffic source</h4>
                                    </div>
                                    <div class="small">
                                        Total users from the beginning of activity. See detailed charts for more information locations and traffic source.
                                    </div>

                                    <div class="sparkline3"></div>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <small class="stat-label">Today</small>
                                            <h4 class="m-t-xs">170,20 <i class="fa fa-level-up text-warning"></i></h4>
                                        </div>
                                        <div class="col-md-4">
                                            <small class="stat-label">Last month %</small>
                                            <h4 class="m-t-xs">%20,20 <i class="fa fa-level-down c-white"></i></h4>
                                        </div>
                                        <div class="col-md-4">
                                            <small class="stat-label">Year</small>
                                            <h4 class="m-t-xs">2180,50 <i class="fa fa-level-up text-warning"></i></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="panel-body">
                                    <div class="text-center slight">
                                    </div>

                                    <div class="flot-chart" style="height: 160px;margin-top: 5px">
                                        <div class="flot-chart-content" id="flot-line-chart"></div>
                                    </div>

                                    <div class="small text-center">All active users from last month.</div>
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
