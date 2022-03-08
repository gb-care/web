<?php 
    session_start();
    include 'config.php';
 
    // menangkap data yang dikirim dari form login
    $email = $_POST['email'];
    $password = $_POST['password'];
 
    // menyeleksi data pada tabel admin dengan username dan password yang sesuai
    $data = mysqli_query($koneksi, "SELECT * FROM user WHERE email='$email' and password='$password'");
 
    // menghitung jumlah data yang ditemukan
    $cek = mysqli_num_rows($data);
 
    if($cek > 0){
        $_SESSION['username'] = $username;
        $_SESSION['status'] = "login";
        header("location:dashboard.php");
    }
    else{
        header("location:index.php?pesan=gagal");
		
    }
?>