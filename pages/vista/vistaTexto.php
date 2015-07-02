<?php
include("../../pages/user_session.php");
include_once(".././../Domain/Sitio.php");
$sitio = unserialize($_SESSION['sitio']);
?>
<div class="slider_left">
    <div class="image group">                                        
        <div class="grid span_2_of_3">                            
            <h3> <span> <?php echo $sitio->nombre; ?></span></h3>
            <p  align="justify">
                <?php echo $sitio->descripcion1; ?><br>
                <?php echo $sitio->descripcion2; ?>
            </p>

        </div>
    </div>

</div>

