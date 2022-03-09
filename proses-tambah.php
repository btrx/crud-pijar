<?php

include("config.php");

if(isset($_POST['submit'])){

    $nama_produk = $_POST['nama_produk'];
    $jumlah = $_POST['jumlah'];
    $harga = $_POST['harga'];
    $keterangan = $_POST['keterangan'];

    $sql = "INSERT INTO produk (nama_produk, jumlah, harga, keterangan) VALUE ('$nama_produk', '$jumlah', '$harga', '$keterangan')";
    $query = mysqli_query($db, $sql);

    if( $query ) {
        header('Location: index.php?status=sukses');
    } else {
        header('Location: index.php?status=gagal');
    }


} else {
    die("Akses dilarang...");
}

?>