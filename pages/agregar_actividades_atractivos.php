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
</head>
<body  onload="getProvincias();getEstereotipo();getCaracteristicas();getTiposSitios()">

    <?php include("admin_header.php"); ?>

    <div class="main">
        <div class="content">
            <div class="wrap">
                <h2>Agregar Actividades o Atractivos Turisticos</h2>
                <div class="section group example">
                    <div class="col_1_of_2 span_1_of_2">                   
                        <div class="contact-form">                            
                            <form method="post" class="left_form">
                                <div>
                                    <span id="tipoSitios">
                                    </span>
                                </div>
                                <div>
                                    <span><label>Nombre:</label></span>
                                    <span><input  type="text" ></span>
                                </div>
                                <div>
                                    <span><label>Precio:</label></span>
                                    <span><input type="text" ></span>
                                </div>
                                <div>
                                    <span><label>Teléfono:</label></span>
                                    <span><input type="text" ></span>
                                </div>
                                <div>
                                    <span><label>Dirección:</label></span>
                                    <span><textarea maxlength="250" ></textarea></span>
                                </div>
                                <div>
                                    <span><label>Descripción Corta</label></span>
                                    <span><textarea maxlength="250"></textarea></span>
                                </div>
                                <div>
                                    <span><label>Descripción Larga</label></span>
                                    <span><textarea  maxlength="1000"></textarea></span>
                                </div>



                            </form>

                            <div class="clear"></div>
                        </div> 
                    </div>
                    <div class="col_1_of_2 span_1_of_2">   
                        <div class="contact-form">  
                            <div>
                                <span><label>URL Video:</label></span>
                                <span><input  type="text" ></span>
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
                                <span><label>Cargar Imagen Principal:</label></span>
                                <span><img src="../images/mosaico.jpg" alt=""  width="150"/>
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
</body>
</html>

