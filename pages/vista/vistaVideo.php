<?php
include("../../pages/user_session.php");
include_once(".././../Domain/Sitio.php");
$sitio = unserialize($_SESSION['sitio']);
$linkVideo = $str = str_replace("watch?v=", "embed/", $sitio->url_video);
$linkVideo = "https://" . $linkVideo . "?enablejsapi=1&origin=http://example.com";
?>
<div class="slider_left">
    <div class="image group">                                        
        <div class="grid span_2_of_3">
            <h3> <span> <?php echo $sitio->nombre; ?></span></h3>

            <iframe id="player" type="text/html" width="100%" height="390px"
                    src="<?php echo $linkVideo; ?>"
                    frameborder="0"></iframe>          
        </div> 
    </div>
    <div class="image group">                                        
        <div class="grid span_2_of_3">
            <p  align="justify">
                <?php echo $sitio->descripcion1; ?>
            </p> 
        </div> 
    </div>
</div>	

