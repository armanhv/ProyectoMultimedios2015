<?php
	session_start();
	if(array_key_exists('admin',$_SESSION) || !empty($_SESSION['admin'])) {
		header( 'Location: .././pages/admin_page.php' ) ;
	}
?>