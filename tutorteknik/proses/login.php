<?php 
require '../config/config.php';

if (isset($_POST["login"])) {

  $username = $_POST["username"];
  $password = $_POST["password"];

  $result = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username'");

  //cek username
  if (mysqli_num_rows($result)===1) {
    //cek password
    $row = mysqli_fetch_assoc($result);
    if(password_verify($password, $row["password"])){

     echo  '<script>
     alert("Login Berhasil");
     window.location  = "../af-login.php"
     </script>';
     exit;
   }
 }
 echo  '<script>
     window.location  = "../index.php?status=1";
     </script>';
}
?>