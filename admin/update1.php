<?php 
// koneksi database
include 'config.php';
 
// menangkap data yang di kirim dari form
$id_book = $_POST['id_book'];
$judul = $_POST['judul'];
$tag = $_POST['tag'];
$content = $_POST['content'];
$image = $_POST['image'];
 
 
// update data ke database
mysqli_query($koneksi,"update book set judul='$judul', tag='$tag', content='$content', image='$image' where id_book='$id_book'");
 
// mengalihkan halaman kembali ke index.php
header("location:dashboard.php");
 
?>