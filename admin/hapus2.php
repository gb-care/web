<?php

include("config.php");

if( isset($_GET['id_travel']) ){

    // ambil id dari query string
    $id_travel = $_GET['id_travel'];

    // buat query hapus
    $sql = "DELETE FROM travel WHERE id_travel=$id_travel";
    $query = mysqli_query($koneksi, $sql);

    // apakah query hapus berhasil?
    if( $query ){
        header('Location: travel.php');
    } else {
        die("gagal menghapus...");
    }

} else {
    die("akses dilarang...");
}

?>