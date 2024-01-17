<?php 
session_start();
session_destroy();
$_SESSION['uemail'] = "";
$_SESSION['uname'] = "";
echo"<script> window.location.assign('index.php')</script>";

?>