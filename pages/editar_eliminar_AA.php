<?php
include("../pages/admin_session.php");
include_once '../Data/DataSitio.php';
include_once '../Data/ImagenesData.php';
include_once '../Data/DataCoordenada.php';
$idSitio = $_GET["id"];
$_SESSION["idSitioAgregado"] = $_GET["id"];

$dataSitio = new DataSitio();
$sitio = $dataSitio->getSitioPorId($idSitio);
$imagenesD = new ImagenesData();
$imagenes = $imagenesD->getImagenesSitio($idSitio);
$ImagenP = $imagenes[0];
$ImagenS1 = $imagenes[1];
$ImagenS2 = $imagenes[2];
$ImagenS3 = $imagenes[3];
$_SESSION["idIm0"]= $imagenes[0]->getId();
$_SESSION["idIm1"]= $imagenes[1]->getId();
$_SESSION["idIm2"]= $imagenes[2]->getId();
$_SESSION["idIm3"]= $imagenes[3]->getId();

        
        

$dataCoordenadas = new DataCoordenada();
$coord = $dataCoordenadas->obtenerCoordenadas($idSitio);
?>
<!DOCTYPE HTML>
<head>
    <title>Agregar Actividades/Atractivos</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="../css/style.css" rel="stylesheet" type="text/css" media="all"/>
    <link rel="shortcut icon" href="../images/icono.png"/> 
    <script src="../js/jquery.min.js"></script> 
    <script type="text/javascript" src="../js/provincia/provincias.js"></script>
    <script type="text/javascript" src="../js/estereotipo/estereotipo.js"></script>
    <script type="text/javascript" src="../js/caracteristicas/caracteristicas.js"></script>
    <script type="text/javascript" src="../js/tipoSitio/tipoSitio.js"></script>
    <script type="text/javascript" src="../js/sitio/sitioAjax.js"></script>
    <script type="text/javascript" src="../js/imagenes/imagenAjax.js"></script>

</head>
<body  onload="getProvincias();
        getEstereotipo();
        getTiposSitios();
        seleccionarValoresCombo();">
<?php include("admin_header.php"); ?>
    <div class="main">
        <div class="content">
            <div class="wrap">
                <h2>Agregar Actividades o Atractivos Turisticos</h2>
                <div class="section group example">
                    <div class="col_1_of_2 span_1_of_2">                   
                        <div class="contact-form">
                            <div>
                                <span><h1>ID:  <?php echo $sitio->id_stio; ?></h1></span>
                                </span>
                            </div>
                            <div>
                                <span id="tipoSitios">
                                </span>
                            </div>
                            <div>
                                <span><label>Nombre:</label></span>
                                <span><input id="txtNombreSitio" type="text" maxlength="44" value="<?php echo $sitio->nombre; ?>"></span>
                            </div>
                            <div>
                                <span><label>Precio:</label></span>
                                <span><input id="txtPrecio" type="number" value="<?php echo $sitio->precio; ?>"></span>
                            </div>
                            <div>
                                <span><label>Teléfono:</label></span>
                                <span><input id="txtTelefono" type="text" value="<?php echo $sitio->telefono; ?>" ></span>
                            </div>
                            <div>
                                <span><label>Dirección:</label></span>
                                <span><textarea id="txtDireccion" maxlength="250"  ><?php echo $sitio->direccion; ?></textarea></span>
                            </div>
                            <div>
                                <span><label>E-mail:</label></span>
                                <span><input id="txtEmail" type="email"  value="<?php echo $sitio->correo; ?>"></span>
                            </div>
                            <div>
                                <span><label>Descripción Corta</label></span>
                                <span><textarea id="txtDescripcionCorta" maxlength="250" ><?php echo $sitio->descripcion1; ?></textarea></span>
                            </div>
                            <div>
                                <span><label>Descripción Larga</label></span>
                                <span><textarea  id="txtDescripcionLarga" maxlength="1000" ><?php echo $sitio->descripcion2; ?></textarea></span>
                            </div>
                            <div>
                                <span><label>URL Video:</label></span>
                                <span><input id="txtUrlVideo"  type="text" value="<?php echo $sitio->url_video; ?>" ></span>
                            </div>
                            <div class="clear"></div>
                        </div> 
                    </div>
                    <div class="col_1_of_2 span_1_of_2">   
                        <div class="contact-form">                              
                            <div>
                                <span id="estereotipos"></span>
                            </div>
                            <div>     
                                <span id="provincias">                                  
                                </span>
                            </div>
                            <div>
                                <span>
                                    <label>Coordenadas:</label>
                                    <table>
                                        <tr>
                                            <td>Latitud</td>
                                            <td>Longitud</td>
                                        </tr>
                                        <tr>
                                            <td><input  type="text" id="txtLatitud"  style="width: 50%" value="<?php echo $coord->latitud; ?>"/></td>
                                            <td><input  type="text" id="txtLongitud"  style="width: 50%" value="<?php echo $coord->longuitud; ?>"/></td>
                                        </tr> 
                                    </table>
                                </span>
                            </div> 

                            <table>
                                <tr>
                                    <td> <span><label>URL Imagen Principal:</label> </span></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td> <span><input  type="text" id="urlImagenP" onkeydown="cambiarImagenPrincipal()" style="width: 100%" value="<?php echo $imagenes[0]->getUrl(); ?>"/></span></td>
                                    <td text-align="center" ><span ><img id="imagenP" src="<?php echo $imagenes[0]->getUrl(); ?>" alt="" height="50" width="50"/> </span></td>  
                                </tr>
                                <tr>
                                    <td> <span><label>URL Imagenes Secundarias:</label> </span></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td> <span><input  type="text" id="urlImagen1" onkeydown="cambiarImagenSecundaria(1)" style="width: 100%" value="<?php echo $imagenes[1]->getUrl(); ?>"/></span></td>
                                    <td text-align="center" ><span ><img id="imagen1" src="<?php echo $imagenes[1]->getUrl(); ?>" alt="" height="50" width="50"/> </span></td>  
                                </tr>
                                <tr>
                                    <td> <span><input  type="text" id="urlImagen2" onkeydown="cambiarImagenSecundaria(2)" style="width: 100%" value="<?php echo $imagenes[2]->getUrl(); ?>"/></span></td>
                                    <td text-align="center" ><span ><img id="imagen2" src="<?php echo $imagenes[2]->getUrl(); ?>" alt="" height="50" width="50"/> </span></td>  
                                </tr>
                                <tr>
                                    <td> <span><input  type="text" id="urlImagen3" onkeydown="cambiarImagenSecundaria(3)" style="width: 100%" value="<?php echo $imagenes[3]->getUrl(); ?>"/></span></td>
                                    <td text-align="center" ><span ><img id="imagen3" src="<?php echo $imagenes[3]->getUrl(); ?>" alt="" height="50" width="50"/> </span></td>  
                                </tr>
                            </table>



                            
                            <div>
                                <span id="caracteristicas">                            
                                </span>
                            </div> 
                            <div class="col_1_of_4 span_1_of_4">
                                <table>
                                    <tr>
                                        <td>
                                            <span ><input type="submit" value="Modificar" id="btnAgregarSitio" class="myButton" onclick="modificarSitioAtractivo()"></span>
                                        </td>
                                        <td></td>
                                        <td>
                                            <span ><input type="submit" value="Eliminar"  class="myButton" style="background: red; border-color: red" onclick="eliminarSitioAtractivo()"></span>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <br><br><br><br><br><br>
                            <span id="resultado"></span>

                        </div>
                    </div>                   
                </div>
            </div>
        </div>
    </div>
    <div class="main">
        <div class="content">
            <div class="wrap">

            </div>
        </div> 
    </div>


<?php include("admin_footer.php"); ?>
    <script type="text/javascript">
        function modificarSitioAtractivo() {

            var parametros = {
                "nombre": $('#txtNombreSitio').val(),
                "precio": $('#txtPrecio').val(),
                "telefono": $('#txtTelefono').val(),
                "direccion": $('#txtDireccion').val(),
                "email": $('#txtEmail').val(),
                "descripcionCorta": $('#txtDescripcionCorta').val(),
                "descripcionLarga": $('#txtDescripcionLarga').val(),
                "urlVideo": $('#txtUrlVideo').val(),
                "tipoSitio": $("#cbxTipoSitio option:selected").val(),
                "estereotipo": $("#cbxEstereotipo option:selected").val(),
                "provincia": $("#cbxProvincias option:selected").val(),
                "latitud": $("#txtLatitud").val(),
                "longitud": $("#txtLongitud").val(),
                "ImagenP": $("#urlImagenP").val(),
                "ImagenS1": $("#urlImagen1").val(),
                "ImagenS2": $("#urlImagen2").val(),
                "ImagenS3": $("#urlImagen3").val()
              
            };

            if (confirm("¿ Desea modificar este sitio ?")) {
                $.ajax({
                    data: parametros,
                    url: './../actions/modificarSitioAction.php',
                    type: 'post',
                    success: function (response) {
                        if (response != 'Error al ingresar el sitio') {
                            // $("#btnAgregarSitio").hide();
                            getCaracteristicas();
                        }
                        $("#resultado").html(response);
                    }
                });
            }
        }
    </script>
    <script type="text/javascript">
        function seleccionarValoresCombo() {

            $('#cbxEstereotipo').val('2');
            $('#cbxTipoSitio').val('2');
        }

        seleccionarValoresCombo();
        function cambiarImagenPrincipal() {
            var urlP = $("#urlImagenP").val();
            $("#imagenP").attr("src", urlP);
        }
        function cambiarImagenSecundaria(id) {
            switch (id) {
                case 0:
                    var urlP = $("#urlImagen1").val();
                    $("#imagen1").attr("src", urlP);
                    break;
                case 1:
                    var urlP = $("#urlImagen1").val();
                    $("#imagen1").attr("src", urlP);
                    break;
                case 2:
                    var urlP = $("#urlImagen2").val();
                    $("#imagen2").attr("src", urlP);
                    break;
                case 3:
                    var urlP = $("#urlImagen3").val();
                    $("#imagen3").attr("src", urlP);
                    break;
                case 4:
                    var urlP = $("#urlImagen4").val();
                    $("#imagen4").attr("src", urlP);
                    break;

            }

        }

    </script>
</body>
</html>

