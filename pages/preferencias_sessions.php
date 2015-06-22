<?php
session_start();

   $_SESSION[$_POST['atribute']] = $_POST['value'];
?>