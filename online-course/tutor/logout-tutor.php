<!-- logout php -->
<?php 
unset($_SESSION['login-tutor']);
unset($_SESSION['tid']);
echo "<script>alert('Berhasil Logout !');</script>>";
echo "<meta http-equiv='refresh' content='0;url=index.php?page=home'>";
?>
 <!-- end logput php -->