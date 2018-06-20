<!-- logout user -->
<?php 

if (isset($_SESSION['login_user']) || $_SESSION['uid'] ) {
	session_destroy();
	session_unset();
	echo "<script>alert('Berhasil Logout');</script>>";
	echo "<meta http-equiv='refresh' content='0;url=index.php?page=home'>";
}
?>
<!-- end logout user -->
