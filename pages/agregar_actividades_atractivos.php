<?php include("../pages/admin_session.php"); ?>
<!DOCTYPE HTML>
<head>
    <title>Agregar Actividades/Atractivos</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="../css/style.css" rel="stylesheet" type="text/css" media="all"/>
    <script src="../js/jquery.min.js"></script> 
    <script type="text/javascript" src="../js/provincia/provincias.js"></script>
    <script type="text/javascript" src="../js/estereotipo/estereotipo.js"></script>
    <script type="text/javascript" src="../js/caracteristicas/caracteristicas.js"></script>
    <script type="text/javascript" src="../js/tipoSitio/tipoSitio.js"></script>
    <script type="text/javascript" src="../js/sitio/sitioAjax.js"></script>
</head>
<body  onload="getProvincias();
        getEstereotipo();
        getCaracteristicas();
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
                                    <span><input id="txtNombreSitio" type="text" ></span>
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
                            <div class="clear"></div>
                            <span ><input type="submit" value="Agregar" class="myButton" onclick="agregarSitio()"></span>
                            <span id="resultado"></span>
                        </div> 
                    </div>
                    <div class="col_1_of_2 span_1_of_2">   
                        <div class="contact-form">  
                            <div>
                                <span><label>URL Video:</label></span>
                                <span><input id="txtUrlVideo"  type="text" ></span>
                            </div>
                            <div>
                                <span id="estereotipos"></span>
                            </div>
                            <div>
                                <span id="caracteristicas">                                    
                                </span>
                            </div>
                            <div>                                    

                                <span id="provincias">                                  
                                </span>
                            </div>


                            <div>
                                <span><label>URL Imagen Principal:</label>
                                    <input  type="text" id="urlImagenP" onkeydown="cambiarImagenPrincipal()" style="width: 50%"/></span>
                                <span ><img id="imagenP" src="" alt="" height="50" width="50"/>
                                </span>
                            </div>

                            <div>
                                <span><label>Cargar Imagenes Secundarias</label></span>
                                <span>
                                    <img src="../images/mosaico.jpg" alt=""  width="150"/>
                                    <img src="../images/mosaico.jpg" alt=""  width="150"/><br>
                                    <img src="../images/mosaico.jpg" alt=""  width="150"/>
                                    <img src="../images/mosaico.jpg" alt=""  width="150"/>
                                </span>
                            </div>

                            <span ><input type="submit" value="Agregar" class="myButton"></span>

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
        function cambiarImagenPrincipal(){
          var urlP=$("#urlImagenP").val();          
          $("#imagenP").attr("src",urlP);
        }
    </script>
</body>
</html>

