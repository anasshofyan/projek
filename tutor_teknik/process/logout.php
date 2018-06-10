<?php 
session_start();
session_unset();
session_destroy();
echo  "<script>
alert('Anda Logout');
window.location  = '../index.php'
</script>";
?>