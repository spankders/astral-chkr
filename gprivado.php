<?php require_once 'templates/header.php';?>
	    <script src="checker/assets/funcao.js"></script>
	    <script src="checker/assets/jquery-3.3.1.js"></script>
	<div class="content">
     	<div class="container">
     		<div class="col-md-8 col-sm-8 col-xs-12">
     			<div class="well text-center">
                            <p><h3>GATE PRIVADO UNC3NS0R3D</h3></p>
                            <br />
                            TEST
                            <hr>
                            <div class="form">
                            <textarea rows="8" class="form-control" id="ccs" name="ccs" placeholder="xxxxxxxxxxxxxxxx|xx|xxxx|xxx"  required="required"  title="Coloque sus generadas para chequear" style="width:100%; "></textarea>
                            </div>
                            <br />
                            <br />
                            <div class="form-group text-center m-t-30">
                            <button onclick="start();" id="testar" for="bt_menu" class="btn btn-success">Iniciar</button>
                            <button onclick="pausar();" id="pausar" for="bt_menu" class="btn btn-warning" disabled>Pausar</button>
                            <button onclick="limpar();" id="limpar" for="bt_menu" class="btn btn-error" disabled>Limpar Tudo</button>

                            </div>
                            <span style="color:#00FF00">Aprobadas ✅</span>
                            <hr>
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                    <th><span title="#">#<span></span></span></th>
                                    <th><span title="Status">Estado<span></span></span></th>
                                    <th><span title="Cartão">Tarjeta<span></span></span></th>
                                    <th><span title="Mês">Mes<span></span></span></th>
                                    <th><span title="Ano">Año<span></span></span></th>
                                    <th><span title="Cvv">Cvv<span></span></span></th>
                                    <th><span title="Debitou">Debito<span></span></span></th>
                                    <th><span title="Informações">Información<span></span></span></th>
                                    </tr>
                                </thead>
                            <tbody name="aprovadas" id="aprovadas">
                            </tbody>
                        </table>
                            <span style="color:#FF0000">Rechazadas ❌</span>
                            <hr>
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th><span title="#">#<span></span></span></th>
                                    <th><span title="Status">Estado<span></span></span></th>
                                    <th><span title="Cartão">Tarjeta<span></span></span></th>
                                    <th><span title="Mês">Mes<span></span></span></th>
                                    <th><span title="Ano">Año<span></span></span></th>
                                    <th><span title="Cvv">Cvv<span></span></span></th>
                                    <th><span title="Recusou">Rechazado<span></span></span></th>
                                    <th><span title="Informações">Información<span></span></span></th>
                                </tr>
                            </thead>
                            <tbody name="reprovadas" id="reprovadas">
                            </tbody>
                        </table>
     			</div>
     			<br>
     		</div>

               <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="well text-center">
                         <p><h3>Información</h3></p>
                         <hr>
                         <font size="2" color="grey">Status: <span class="text text-danger" id="stats" >En espera... </span></font>
                         <br><br>
                         <font color="blue" size="2"> Cargadas 💾  <span  id="carregadas">0 </span></font><br><br>
                         <font color="green" size="2"> Aprobadas ✅  <span class="text text-success" id="CLIVE" name="CLIVE">0 </span></font><br><br>
                         <font color="red" size="2"> Denegadas ❌  <span class="text text-danger" id="CREPRO" name="CREPRO">0 </span></font><br><br>
                         <font color="black" size="2"> Chequeadas 💎 <span class="text text-warning" id="testado">0 </span></font>
                   <br><br>
                      <font size="2" color="grey" > En fila: &nbsp;
                      	<span color="yellow" class="text text-warning" id="fila" name="fila">n/d</span></font>
                   <br><br>

                      <div align="center">
                       <div class="panel panel-filled panel-c-success">
                       <div class="panel-heading">
                       <div class="panel-tools">
                       <a class="panel-toggle"><span class="fa fa-check text-success"></span></a>
                        </div>
                        </div>
                       <div class="panel-body">
                       <div class="table-responsive">
                      
                         <p> 

                    </div>
                    <br>
                    
                    
               </div>
     		<?php require_once 'templates/sidebar.php';?>
     		 
     	</div>
    </div> <!-- /container -->
<?php require_once 'templates/footer.php';?>