<!-- logout user -->
<?php 
unset($_SESSION['login_user']);
unset($_SESSION['uid']);
echo "<script>alert('Berhasil Logout');</script>>";
echo "<meta http-equiv='refresh' content='0;url=index.php?page=home'>";
?>
<!-- end logout user -->
