<?php 
session_start();
require '../config/db.php';

if (isset($_POST["login"])) {

  $username = $_POST["username"];
  $password = $_POST["password"];

  $result = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username'");

  //cek username
  if (mysqli_num_rows($result)===1) {
    //cek password
    $row = mysqli_fetch_assoc($result);
    if(password_verify($password, $row["password"])){
      //set sesion
      $_SESSION['login'] = true;
      $_SESSION['uid'] = $row["id_user"];
      echo '<script>
      alert("Login Berhasil");
      window.location  = "../index.php"
      </script>';
    }
  }
  echo '<script>
  alert("Login gagal");
  window.location  = "../index.php"
  </script>';
}
?>