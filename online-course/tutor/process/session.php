<?php
require 'config/db.php';
if(!isset($_SESSION['login-tutor']) || !$_SESSION['login-tutor']){
	echo "<script>alert('Silahkan Login terlebih dahulu')</script>";
	echo "<meta http-equiv='refresh' content='0;url=index.php?page=login-tutor'>";
}
?>