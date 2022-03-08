<?php

include("config.php");

if( isset($_GET['id_english']) ){

    // ambil id dari query string
    $id_english = $_GET['id_english'];

    // buat query hapus
    $sql = "DELETE FROM english WHERE id_english=$id_english";
    $query = mysqli_query($koneksi, $sql);

    // apakah query hapus berhasil?
    if( $query ){
        header('Location: learning-english.php');
    } else {
        die("gagal menghapus...");
    }

} else {
    die("akses dilarang...");
}

?>