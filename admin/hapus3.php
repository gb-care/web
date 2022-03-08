<?php

include("config.php");

if( isset($_GET['id_tajwid']) ){

    // ambil id dari query string
    $id_tajwid = $_GET['id_tajwid'];

    // buat query hapus
    $sql = "DELETE FROM tajwid WHERE id_tajwid=$id_tajwid";
    $query = mysqli_query($koneksi, $sql);

    // apakah query hapus berhasil?
    if( $query ){
        header('Location: tajwid.php');
    } else {
        die("gagal menghapus...");
    }

} else {
    die("akses dilarang...");
}

?>