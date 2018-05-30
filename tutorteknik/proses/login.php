<?php 
session_start();
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
      $_SESSION['id_user'] = $row['id_user'];
      if (isset($_SESSION['id_user'])) {
       echo  '<script>
       alert("Login Berhasil");
       window.location  = "../af-login.php"
       </script>';
     }
     
   }
 }
 echo '<script>
 alert("Login gagal");
 window.location  = "../index.php"
 </script>';
}
?>