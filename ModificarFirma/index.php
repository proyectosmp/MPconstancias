<?php 
 session_start();
ob_start();
include('../crearConexionGECOMP.php');
 //$varsession= $_SESSION['username'];
 //if($varsession== null || $varsession= ''){
 // header("location:prueba.php");

 // die();
 //}
 ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<title>Inicio</title>


	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
           <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>            
           <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />  
           
            
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="../css/Estilos.css">

	<style>
.dropdown-submenu {
  position: relative;
}

.dropdown-submenu .dropdown-menu {
  top: 0;
  left: 100%;
  margin-top: -1px;
}
</style>
<script>
$(document).ready(function(){
  $('.dropdown-submenu a.test').on("click", function(e){
    $(this).next('ul').toggle();
    e.stopPropagation();
    e.preventDefault();
  });
});
</script>
</head>

	<!-- SideBar -->
<section id="loadgif">
  <div class="container">
  <nav class="navbar navbar-inverse">
    <div class="navbar-header"> 
  </div>
  <div class="collapse navbar-collapse js-navbar-collapse">
    <ul class="nav navbar-nav">
 <a class="navbar-brand" href="inicio.php">Usuario</a>
    </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="../Home.php">Inicio</a></li>
          <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Constancias <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
         <li class="dropdown-submenu">
        <a class="test" tabindex="-1" href="#">Constancias de Trabajo<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a tabindex="-1" href="#"   data-toggle="modal" data-target="#nuevoPorcentaje">Sin Deducciones</a></li>
                       <li class="dropdown-submenu">
                        <a class="test" tabindex="-1" href="#">Con Deducciones<span class="caret"></span></a>
                       <ul class="dropdown-menu">
                         <li><a tabindex="-1" href="Porcentaje.php">Normal</a></li>
                           <li><a tabindex="-1" href="Porcentaje.php">Con Plus</a></li>
                              <li><a tabindex="-1" href="Porcentaje.php">Sin Plus</a></li>
                        </ul>
                      </li>
        </ul>
      </li>
            <li class="dropdown-submenu">
        <a class="test" tabindex="-1" href="#">Bonos<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a tabindex="-1" href="#"   data-toggle="modal" data-target="#nuevoPorcentaje">13AVO</a></li>
          <li><a tabindex="-1" href="Porcentaje.php">14AVO</a></li>
           <li><a tabindex="-1" href="Porcentaje.php">Vacaciones</a></li>
        </ul>
      </li>
        <li><a tabindex="-1" href="Porcentaje.php">Universidades</a></li>
          <li><a tabindex="-1" href="Porcentaje.php">Embajadas y Consulados</a></li>
            <li><a tabindex="-1" href="Porcentaje.php">T.S.C.</a></li>
              <li><a tabindex="-1" href="Porcentaje.php">Cancelados</a></li>



            
            <!--<li class="divider"></li>
            <li><a href="#">Separated link</a></li>-->
          </ul>
        </li>


       <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Reportes <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="Man_mp.php">1</a></li>
            <li><a href="Man_pr.php">2</a></li>
            <li><a href="cai.php">3</a></li>
          </ul>
        </li>


        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Mantenimiento <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
                <li class="dropdown-submenu">
                 <a class="test" tabindex="-1" href="#">Cooperativas<span class="caret"></span></a>
                <ul class="dropdown-menu">
                   <li><a tabindex="-1" href="Nuevacooperativa.php">Nueva</a></li>
                 <li><a tabindex="-1" href="Listacooperativas.php">Modificar</a></li>
                  </ul>
                 </li>

                <li class="dropdown-submenu">
                 <a class="test" tabindex="-1" href="#">Firma de Autorizacion<span class="caret"></span></a>
                <ul class="dropdown-menu">
                   <li><a tabindex="-1" href="Nuevafirma.php">Nueva</a></li>
                 <li><a tabindex="-1" href="Porcentaje.php">Modificar</a></li>
                  </ul>
                 </li>
                
                 <li><a tabindex="-1" href="Nuevaembajada.php">Nueva Embajada o Consulado</a></li>
                 <li><a tabindex="-1" href="Nuevaembajada.php">Anular Constancias</a></li>
          </ul>
        </li>



        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Seguridad<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
                <li class="dropdown-submenu">
                 <a class="test" tabindex="-1" href="#">Usuario<span class="caret"></span></a>
                <ul class="dropdown-menu">
                   <li><a tabindex="-1" href="Porcentaje.php">Nuevo Usuario</a></li>
                 <li><a tabindex="-1" href="index.php">Modificar Usuario</a></li>
                  </ul>
                 </li>
                <li><a tabindex="-1" href="Porcentaje.php">Crear Roll</a></li>
                 <li><a tabindex="-1" href="Porcentaje.php">Cambiar Clave</a></li>
          </ul>
        </li>




        
        <li><a href="#"   data-toggle="modal" data-target="#miModal">Cerra Session</a></li>
        
        
<!-- Modal -->
<div class="modal fade" id="nuevoPorcentaje" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">SICORE</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h1> ¿Desea cerrar session?</h1>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
        <button onclick="location.href='cerrarSesion.php'" type="button" class="btn btn-primary">si</button>
      </div>
    </div>
  </div>
</div> 





<!-- modal de Nuevo Porcentaje de Retencion-->


</section>
<body style="background-color:#00FFFFFF">
<section class="centrar">
	
	<div >
      
                 
                <br />  
                <div class="table-responsive">  
                     <table id="employee_data" class="table table-striped table-bordered">  
                          <thead>  
                               <tr>  
                                    <td ><strong>Codigo del Empleado</strong></td>  
                                    <td><strong>Nombre</strong></td>  
                                    <td><strong>Puesto</strong></td>
                                    <td><strong>Constancias de trab./sin deducciones</strong></td>  
                                    <td><strong>Constancias de trab./Con deducciones Normal</strong></td>  
                                    <td><strong>Constancias de trab./Con deducciones Con plus</strong></td>  
                                    <td><strong>Constancias de trab./Con deducciones sin plus</strong></td>  
                                    <td><strong>Bonos 13vo</strong></td>  
                                    <td><strong>Bonos 14vo</strong></td>  
                                    <td><strong>Bonos Vacaciones</strong></td>  
                                    <td><strong>Universidades</strong></td>  
                                    <td><strong>Embajadas y consulados</strong></td> 
                                    <td><strong>T.S.C</strong></td> 
                                    <td><strong>Cancelados</strong></td>    
                                    <td><strong>Fecha de creacion de usuario</strong></td>  
                                    <td><strong>Estado</strong></td>  
                                    <td><strong>Accion</strong></td>  

                                    
                               </tr>  
                          </thead>  
                         
                     <?php 
 					$color='';
                     $rojo='rgb(228, 119, 79, .7)'; 
                     $verde='RGB(0, 255, 0, .4)';
                     $amarillo='rgb(255, 255, 0, .5)';
                     $row=0;
                     	$MostrarUsuario=mssql_query("SELECT * FROM FIRMA_CONSTANCIAS");
                     	while ($fila=mssql_fetch_array($MostrarUsuario)) {


                     		if ($fila['CTSD']==1) {
                     				$fila['CTSD']='Si';
                     			}else{
                     				$fila['CTSD']='No';
                     			}
                     		

                     		if ($fila['CTCDN']==1) {
                     				$fila['CTCDN']='Si';
                     			}else{
                     				$fila['CTCDN']='No';
                     			}
                     			

                     		if ($fila['CTCDSP']==1) {
                     				$fila['CTCDSP']='Si';
                     			}else{
                     				$fila['CTCDSP']='No';
                     			}
                     			

                     		if ($fila['CTCDCP']==1) {
                     				$fila['CTCDCP']='Si';
                     			}else{
                     				$fila['CTCDCP']='No';
                     			}
                     		if ($fila['TRECE_AVO']==1) {
                     				$fila['TRECE_AVO']='Si';
                     			}else{
                     				$fila['TRECE_AVO']='No';
                     			}
                     		if ($fila['CATORCE_AVO']==1) {
                     				$fila['CATORCE_AVO']='Si';
                     			}else{
                     				$fila['CATORCE_AVO']='No';
                     			}
                     		if ($fila['VAC']==1) {
                     				$fila['VAC']='Si';
                     			}else{
                     				$fila['VAC']='No';
                     			}
                     		if ($fila['UNIVERSIDADES']==1) {
                     				$fila['UNIVERSIDADES']='Si';
                     			}else{
                     				$fila['UNIVERSIDADES']='No';
                     			}
                     		if ($fila['EMBAJADAS']==1) {
                     				$fila['EMBAJADAS']='Si';
                     			}else{
                     				$fila['EMBAJADAS']='No';
                     			}
                     		if ($fila['TSC']==1) {
                     				$fila['TSC']='Si';
                     			}else{
                     				$fila['TSC']='No';
                     			}
                     		if ($fila['CANCELADOS']==1) {
                     				$fila['CANCELADOS']='Si';
                     			}else{
                     				$fila['CANCELADOS']='No';
                     			}

                     		if ($fila['ESTATUS']==1) {
                     			$fila['ESTATUS']='Activo';
                     			$color=$verde;
                     		}else{
                     			$fila['ESTATUS']='Anulado';
                     			$color=$rojo;
                     		}

                     		$newDat1 = date("d/m/Y", strtotime($fila['FECHA_CREACION']));
                     		
                     			
                     			echo "
                     		
                  <tr>
                     
                    <td style='background-color:".$color."'>".$fila['CODIGO_EMPLEADO']."</td>
                    <td style='background-color:".$color."'>".$fila['NOMBRE_EMPLEADO']."</td>
                    <td style='background-color:".$color."'>".$fila['PUESTO_EMPLEADO']."</td>
                    <td style='background-color:".$color."'>".$fila['CTSD']."</td>
                    <td style='background-color:".$color."'>".$fila['CTCDN']."</td>
                    <td style='background-color:".$color."'>".$fila['CTCDCP']."</td>
                    <td style='background-color:".$color."'>".$fila['CTCDSP']."</td>
                    <td style='background-color:".$color."'>".$fila['TRECE_AVO']."</td>
                    <td style='background-color:".$color."'>".$fila['CATORCE_AVO']."</td>
                    <td style='background-color:".$color."'>".$fila['VAC']."</td>
                    <td style='background-color:".$color."'>".$fila['UNIVERSIDADES']."</td>
                    <td style='background-color:".$color."'>".$fila['EMBAJADAS']."</td>  
                    <td style='background-color:".$color."'>".$fila['TSC']."</td>
                    <td style='background-color:".$color."'>".$fila['CANCELADOS']."</td>              
                    <td style='background-color:".$color."'>".$newDat1."</td>
                    <td style='background-color:".$color."'>".$fila['ESTATUS']."</td>
                    <td style='background-color:".$color."'><a href='optenerDatos.php?x={$fila['Id_FIRMA']}'>Modificar</a></td>
                  </tr>";
                     		
                     	
                     		
                    

                     	
                     		
                     		}

                     		
                       ?>
                    
                    
                  
                     </table>  
                </div>  
          
                 </div>  
</section>
	<!-- Content page-->



	<!-- Notifications area -->
	

	<!-- Dialog help -->
	 <script>  
 $(document).ready(function(){  
      $('#employee_data').DataTable();  
 });  
 </script>  
	
	<!--====== Scripts -->
	<script src="../js/jquery-3.3.1.min.js"></script>
	<script src="../js/sweetalert2.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="../js/material.min.js"></script>
	<script src="../js/ripples.min.js"></script>
	<script src="../js/jquery.mCustomScrollbar.concat.min.js"></script>
	<script src="../js/main.js"></script>
	<script>
		$.material.init();
	</script>
</body>
</html>