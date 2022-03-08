<?php 
// koneksi database
include 'config.php';
 
// menangkap data yang di kirim dari form
$id_travel = $_POST['id_travel'];
$judul = $_POST['judul'];
$tag = $_POST['tag'];
$content = $_POST['content'];
$image = $_POST['image'];
 
 
// update data ke database
mysqli_query($koneksi,"update travel set judul='$judul', tag='$tag', content='$content', image='$image' where id_travel='$id_travel'");
 
// mengalihkan halaman kembali ke index.php
header("location:dashboard.php");
 
?>