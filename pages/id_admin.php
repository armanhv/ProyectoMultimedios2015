<?php 

$con = mysql_connect("163.178.173.144:3306", "multimedios", "multimedios") or die("No fue posible conectar con el servidor");

mysql_select_db("multimedios_dds") or die("No fue posible selecionar la base de datos");


//echo "Mi select :"; 

$miselect = "SELECT id from admin where admin_general =0"; 

$resultado = mysql_query($miselect,$con); 

if(!$resultado){ 
echo " fallo"; 
} 
else{ 
echo "<select name='select1' id='select1' >"; 
echo "<option>",'Seleccione',"</option>"; 
while ($row=mysql_fetch_row($resultado)){ 

echo "<option value='$row[0]'>", $row[0], "</option>"; 

}	
} 
echo"</select>"; 


?>