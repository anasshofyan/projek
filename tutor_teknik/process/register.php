<?php 
require '../config/db.php';

if (isset($_POST["register"])) {
  if (registrasi($_POST)>0) {
    echo  '<script>
    alert("Pendaftaran Berhasil, silahkan login");
    window.location  = "../index.php"
    </script>';
  }
}else{
  echo mysqli_error($conn);
}
function registrasi($data){
  GLOBAL $conn;

  $nama = $data["nama"];
  $username = strtolower(stripcslashes($data["username"]));
  $email = $data["email"];
  $password = mysqli_real_escape_string($conn, $data["password"]);
  $password1 = mysqli_real_escape_string($conn, $data["password1"]);

  //cek username sudah ada atau belum
  $result = mysqli_query($conn, "SELECT username FROM users WHERE username = '$username'");

  if (mysqli_fetch_assoc($result)) {
     echo  '<script>
    alert("Username telah digunakan");
    window.location  = "../index.php"
    </script>';
    return false;
  }
    //cek password
  if ($password != $password1) {
    echo "<script>
    alert('konfirmasi password tidak sesuai');
    </script>"; 
    return false;
  }
  
  //enkripsi password
  $password = password_hash($password, PASSWORD_DEFAULT);

   //menambahkan ke database
  mysqli_query($conn, "INSERT INTO users (nama, username, email, password) VALUES ('$nama', '$username', '$email', '$password')");

  return mysqli_affected_rows($conn); 
}
?>