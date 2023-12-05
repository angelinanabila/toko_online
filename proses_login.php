<?php 
session_start();
include 'connection.php';

$username=$_POST['username'];
$password=$_POST['password'];

$login=mysqli_query($connection,"select * from pengguna where username='$username' and password='$password'");
$cek=mysqli_num_rows($login);
if($cek > 0){
    $data=mysqli_fetch_assoc($login);
    if($data['level']=="petugas"){

        $_SESSION['username']=$username;
        $_SESSION['level']="petugas";
        
        //masuk ke folder guru
        header("location:petugas/halaman_petugas.php");

    }else if($data['level']=="pelanggan"){

        $_SESSION['username']=$username;
        $_SESSION['level']="pelanggan";
        header("location:pelanggan/home.php");

    }
}else{

    header("location:index.php?pesan=gagal");

}

?>