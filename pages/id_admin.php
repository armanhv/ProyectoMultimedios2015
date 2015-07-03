<?php 
mysql_connect("163.178.173.144:3306", "multimedios", "multimedios") or die("No fue posible conectar con el servidor");

mysql_select_db("multimedios_dds") or die("No fue posible selecionar la base de datos"); 
echo ok;

?>