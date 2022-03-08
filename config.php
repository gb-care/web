<?php 
    $koneksi = mysqli_connect("localhost","root","","db_web");
 
    if (mysqli_connect_errno()){
        echo "Koneksi database gagal : " . mysqli_connect_error();
    }
   
  
/*
$host = 'localhost';
$db = 'db_web';
$user = 'root';
$pass = '';
$charset = 'utf8b4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

try {
    $pdo = new PDO($dsn,$user,$pass);

} catch (PDOException $e) {
    throw new PDOException($e->getMessage()); 
}
?>*/

?>

