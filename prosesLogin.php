<?php
session_start();

include 'koneksi.php';

$error = [];

if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $data = mysqli_query($con, "select * from user where username ='$username' and password='$password'");
    
    $cek = mysqli_num_rows($data);
    
    if($cek > 0){
        $_SESSION['username'] = $username;
        $_SESSION['status'] = "login";
        header("location:daftarPeserta.php");
    }
    else{
        $error['errLogin'] = "Login Gagal!";
        // header("location:prosesLogin.php?pesan=gagal");
    }
}
?>