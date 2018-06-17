<!-- logout user -->
<?php 
session_unset();
session_destroy();
echo "<script>alert('Berhasil Logout');</script>>";
echo "<meta http-equiv='refresh' content='0;url=index.php?page=home'>";
 ?>
<!-- end logout user -->
