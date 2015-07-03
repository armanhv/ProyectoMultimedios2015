<?php include("../pages/admin_session.php"); ?>
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
        getTiposSitios()">
           <?php include("admin_header.php"); ?>
    <div class="main">
        <div class="content">
            <div class="wrap">
                <h2>Agregar Actividades o Atractivos Turisticos</h2>
                <div class="section group example">
                    <div class="col_1_of_2 span_1_of_2">                   
                        <div class="contact-form">
                            <div>
                                <span id="tipoSitios">
                                </span>
                            </div>
                            <div>
                                <span><label>Nombre:</label></span>
                                <span><input id="txtNombreSitio" type="text" maxlength="44" ></span>
                            </div>
                            <div>
                                <span><label>Precio:</label></span>
                                <span><input id="txtPrecio" type="number" ></span>
                            </div>
                            <div>
                                <span><label>Teléfono:</label></span>
                                <span><input id="txtTelefono" type="text" ></span>
                            </div>
                            <div>
                                <span><label>Dirección:</label></span>
                                <span><textarea id="txtDireccion" maxlength="250" ></textarea></span>
                            </div>
                            <div>
                                <span><label>E-mail:</label></span>
                                <span><input id="txtEmail" type="email" ></span>
                            </div>
                            <div>
                                <span><label>Descripción Corta</label></span>
                                <span><textarea id="txtDescripcionCorta" maxlength="250"></textarea></span>
                            </div>
                            <div>
                                <span><label>Descripción Larga</label></span>
                                <span><textarea  id="txtDescripcionLarga" maxlength="1000"></textarea></span>
                            </div>
                            <div>
                                <span><label>URL Video:</label></span>
                                <span><input id="txtUrlVideo"  type="text" ></span>
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
                                    <a href="http://www.agenciacreativa.net/coordenadas_google_maps.php" target="_blank">Obtener Coordenadas</a>
                                    <table>
                                        <tr>
                                            <td>Latitud</td>
                                            <td>Longitud</td>
                                        </tr>
                                        <tr>
                                            <td><input  type="text" id="txtLatitud"  style="width: 50%" value=""/></td>
                                            <td><input  type="text" id="txtLongitud"  style="width: 50%" value=""/></span></td>
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
                                    <td> <span><input  type="text" id="urlImagenP" onkeydown="cambiarImagenPrincipal()" style="width: 100%"/></span></td>
                                    <td text-align="center" ><span ><img id="imagenP" src="" alt="" height="50" width="50"/> </span></td>  
                                </tr>
                                <tr>
                                    <td> <span><label>URL Imagenes Secundarias:</label> </span></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td> <span><input  type="text" id="urlImagen1" onkeydown="cambiarImagenSecundaria(1)" style="width: 100%"/></span></td>
                                    <td text-align="center" ><span ><img id="imagen1" src="" alt="" height="50" width="50"/> </span></td>  
                                </tr>
                                <tr>
                                    <td> <span><input  type="text" id="urlImagen2" onkeydown="cambiarImagenSecundaria(2)" style="width: 100%"/></span></td>
                                    <td text-align="center" ><span ><img id="imagen2" src="" alt="" height="50" width="50"/> </span></td>  
                                </tr>
                                <tr>
                                    <td> <span><input  type="text" id="urlImagen3" onkeydown="cambiarImagenSecundaria(3)" style="width: 100%"/></span></td>
                                    <td text-align="center" ><span ><img id="imagen3" src="" alt="" height="50" width="50"/> </span></td>  
                                </tr>
                               
                            </table>

                            <span ><input type="submit" value="Agregar" id="btnAgregarSitio" class="myButton" onclick="insertarSitioAtractivo()"></span>
                            <br><br><br><br>
                            <span id="resultado"></span>
                            <div>
                                <span id="caracteristicas">                            
                                </span>
                            </div> 

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

