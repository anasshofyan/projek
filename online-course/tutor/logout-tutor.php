<!-- logout php -->
<?php 
if (isset($_SESSION['login_tutor']) || $_SESSION['tid']  ) {
	session_destroy();
	session_unset();
	echo "<script>alert('Berhasil Logout !');</script>>";
	echo "<meta http-equiv='refresh' content='0;url=index.php?page=home'>";
}
 ?>
 <!-- end logput php -->