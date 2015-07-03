<?php
//include("../pages/user_session.php");
include_once(".././Data/DataSitio.php");
include_once(".././Data/DataImagen.php");
include_once(".././Data/DataCoordenada.php");
include_once(".././Data/DataCaracteristica.php");
//$sitioData=new DataSitio();
//$sitio = $sitioData->getSitioPorId($_POST["idSitio"]);
$idSitio = $_POST["idSitio"];
//$da = new DataSitio();
//$da->load_sitio($_GET['id']);

$da = new DataImagen();
$imagenes = $da->obtenerImages($idSitio);

$da = new DataCoordenada();
$coordenada = $da->obtenerCoordenadas($idSitio);

$da = new DataCaracteristica();
$da->get_caracteristicas($idSitio);
?>

  
<div>

    <span id="caracteristicas">                                    
    </span>
</div>
<div>
    <table>
        <tr>
            <td> <span><label>URL Imagen Principal:</label> </span></td>
            <td></td>
        </tr>
        <tr>
            <td> <span><input  type="text" id="urlImagenP" onkeydown="cambiarImagenPrincipal()" style="width: 100%"/></span></td>
            <td text-align="center" ><span ><img id="imagenP" src="" alt="" height="50" width="50"/> </span></td>
             <span ><input type="submit" value="Agregar Imagen Principal" id="btnAgregarImagenPrincipal" class="myButton" onclick="AgregarImagenPrincipal()"></span>
             <span id="resultadoImagenP"></span>
    </tr>
        <tr>
            <td> <span><label>URL Imagenes Secundarias:</label> </span></td>
            <td></td>
        </tr>
        <?php foreach ($imagenes as $imagen) { ?>  
            <tr>
                <td><input type="radio" id="idImagen" name="idImagen" value="<?php echo $imagen->id; ?>" checked>
                    <a> <?php echo $imagen->url_imagen; ?></a></td>                
            </tr>

        <?php } ?>
    </table>
</div>