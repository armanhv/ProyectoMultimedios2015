<?php 
//session_start();
include ('../Domain/Admin.php');
$admin = unserialize($_SESSION['admin']);
?>
<div class="header">
        <div >
            <div class="wrap">
                <div class="logo">
                    <a ><img src="../images/logo.png" alt="" /></a>
                </div>
                <div class="call">
                   <h3> <span><a href=".././actions/admin_header.php">Cerrar Sesión</a></span></h3>
                </div>
                <div class="clear"></div>
            </div>
        </div>
        <div class="header_bottom">
            <div class="wrap">
                <div class="menu">
                    <ul>
                        <li><a href="admin_page.php">Inicio</a></li>
                        <li><a href="informacion_administrador.php">Información Administrador</a></li>
                        <?php if ($admin->admin_general == 1){?>
                        	<li><a href="agregar_administrador.php">Agregar adminsitrador</a></li>
                            <li><a href="eliminar_administrador.php">Eliminar adminsitrador</a></li>
						<?php }?>
                        <li><a href="agregar_actividades_atractivos.php">Agregar Actividades y Atractivos</a></li>
                        <li><a href="mantenimientoSitios.php">Mantenimiento Actividades y Atractivos</a></li>
                       
                    </ul>
                </div>
               
                <div class="clear"></div>
            </div>	     
        </div>	
        <div class="strip"> </div>
</div>  
