<?php include("../pages/user_session.php"); ?>
<!DOCTYPE HTML>
<head>
    <title>Proyecto de Multimedios</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="../css/style.css" rel="stylesheet" type="text/css" media="all"/>
    <script src="../js/jquery.min.js"></script> 

    <!-- Para el template 2!-->
    <link href="../segundoTemplate/css/bootstrap.css" rel='stylesheet' type='text/css' />

    <link href="../segundoTemplate/css/style2.css" rel="stylesheet" type="text/css" media="all" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href='http://fonts.googleapis.com/css?family=Cabin:400,500,600,700,600italic,700italic' rel='stylesheet' type='text/css'>
</head>
<body>
    <?php include("user_header.php"); ?>

    <div class="content">	 
        <div class="categories">
            <ul>
                <li class="cate">Tipo de Busqueda</li>
                <li ><a href="actividades_atractivos.php">Lo mas visitados</a></li>
                <li class="active"><a href="busqueda_avanzada.php">Busqueda Avanzada</a></li>
                <li><a href="busqueda_estereotipo.php">Busqueda por Estereotipos</a></li>                
            </ul>            
        </div><br>
        <div class="main">
            <div class="content">
                <div class="wrap">
                    <div class="services">                       
                        <div class="section group">
                            <div class="col_1_of_4 span_1_of_4">                                    
                                <div class="services_list">
                                    <input type="checkbox" name="option1" value="Milk"> Familia<br>
                                    <input type="checkbox" name="option1" value="Milk"> Tour<br>
                                    <input type="checkbox" name="option1" value="Milk"> Montaña<br>
                                </div>
                            </div>
                            <div class="col_1_of_4 span_1_of_4">                                   
                                <div class="services_list">
                                    <input type="checkbox" name="option1" value="Milk"> Deporte<br>
                                    <input type="checkbox" name="option1" value="Milk"> Restaurante<br>
                                    <input type="checkbox" name="option1" value="Milk"> Playa<br>
                                </div>
                            </div>
                            <div class="col_1_of_4 span_1_of_4">                                   
                                <div class="services_list">
                                    <input type="checkbox" name="option1" value="Milk"> Fácil Acceso<br>                                    
                                    <input type="checkbox" name="option1" value="Milk"> Cultural<br>
                                </div>
                            </div>
                            <div class="col_1_of_4 span_1_of_4">                                   
                                <div class="services_list">
                                    <label >Precio:</label>
                                    <select name="select">
                                        <option>500-999</option>
                                        <option>1000-1499</option>
                                    </select><br>
                                    <label >Provincia:</label>
                                    <select name="select">
                                        <option>Cartago</option>
                                        <option>San José</option>
                                    </select> <br> <br>
                                    <div class="read_more"><a>Buscar</a></div> 
                                </div>
                            </div>
                        </div>                                
                    </div>
                </div>
                <div class="spa_products">
                    <h2>Busqueda Avanzada</h2>
                    <div class="section group">
                        <div class="products_1_of_3">
                            <img src="../images/1.jpg" alt="" />
                            <h3>Ipsum is dummy text </h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                            <div class="read_more"><a href="#">Ver</a></div>
                        </div>
                        <div class="products_1_of_3">
                            <img src="../images/2.jpg" alt="" />
                            <h3>Duis aute irure dolor</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                            <div class="read_more"><a href="#">Ver</a></div>
                        </div>
                        <div class="products_1_of_3">
                            <img src="../images/3.jpg" alt="" />
                            <h3>dolor sit amet elit</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                            <div class="read_more"><a href="#">Ver</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <!----->            
        </div>
    </div>

    <?php include("user_footer.php"); ?>
</body>
</html>
