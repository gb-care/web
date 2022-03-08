<?php
include 'config.php';
$id_travel=time();
$judul = $_POST['judul'];
$tag = $_POST['tag'];
$content = $_POST['content'];
 
$rand = rand();
$ekstensi =  array('png','jpg','jpeg','gif');
$filename = $_FILES['image']['name'];
$ukuran = $_FILES['image']['size'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);
 
if(!in_array($ext,$ekstensi) ) {
	header("location:dashboard.php?alert=gagal_ekstensi");
}else{
	if($ukuran < 1044070){		
		$xx = $rand.'_'.$filename;
		move_uploaded_file($_FILES['image']['tmp_name'], '../pictures/'.$rand.'_'.$filename);
		mysqli_query($koneksi, "INSERT INTO travel VALUES('$id','$judul','$tag','$content','$xx')");
		header("location:dashboard.php?alert=berhasil");
	}else{
		header("location:dashboard.php?alert=gagak_ukuran");
	}
}
?>