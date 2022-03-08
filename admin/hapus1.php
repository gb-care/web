<?php

include("config.php");

if( isset($_GET['id_book']) ){

    // ambil id dari query string
    $id_book = $_GET['id_book'];

    // buat query hapus
    $sql = "DELETE FROM book WHERE id_book=$id_book";
    $query = mysqli_query($koneksi, $sql);

    // apakah query hapus berhasil?
    if( $query ){
        header('Location: book.php');
    } else {
        die("gagal menghapus...");
    }

} else {
    die("akses dilarang...");
}

?>