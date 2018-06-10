<?php
require 'config/db.php';
session_start();
if(!isset($_SESSION['login']) || !$_SESSION['login']){
	echo "<meta http-equiv='refresh' content='0;url=index.php'>";
}
?>