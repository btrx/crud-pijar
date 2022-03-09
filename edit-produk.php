<?php

include("config.php");

if( !isset($_GET['id']) ){
    header('Location: index.php');
}

$id = $_GET['id'];

$sql = "SELECT * FROM produk WHERE id=$id";
$query = mysqli_query($db, $sql);
$produk = mysqli_fetch_assoc($query);

if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Produk</title>
</head>

<body>
    <header>
        <h3>Edit Produk</h3>
    </header>

    <form action="proses-edit.php" method="POST">

        <fieldset>

        <input type="hidden" name="id" value="<?php echo $produk['id'] ?>" />

        <p>
            <label for="nama_produk">Nama Produk: </label>
            <input type="text" name="nama_produk" placeholder="nama produk" value="<?php echo $produk['nama_produk'] ?>" />
        </p>
        <p>
            <label for="jumlah">Jumlah: </label>
            <input name="jumlah" placeholder="jumlah" value="<?php echo $produk['jumlah'] ?>"></input>
        </p>
        <p>
            <label for="harga">Harga: </label>
            <input name="harga" placeholder="harga" value="<?php echo $produk['harga'] ?>"></input>
        </p>
        <p>
            <label for="keterangan">Keterangan: </label>
            <textarea name="keterangan" placeholder="keterangan" value="<?php echo $produk['keterangan'] ?>"></textarea>
        </p>
        <p>
            <input type="submit" value="simpan" name="simpan" />
        </p>

        </fieldset>

    </form>

    </body>
</html>