<!DOCTYPE html>
<html>
<head>
    <title>Tambah Produk</title>
</head>

<body>
    <header>
        <h3>Tambah Produk</h3>
    </header>

    <form action="proses-tambah.php" method="POST">

        <fieldset>

        <p>
            <label for="nama_produk">Nama Produk: </label>
            <input type="text" name="nama_produk" placeholder="nama produk" />
        </p>
        <p>
            <label for="jumlah">Jumlah: </label>
            <input name="jumlah" placeholder="jumlah"></input>
        </p>
        <p>
            <label for="harga">Harga: </label>
            <input name="harga" placeholder="harga"></input>
        </p>
        <p>
            <label for="keterangan">Keterangan: </label>
            <textarea name="keterangan" placeholder="keterangan"></textarea>
        </p>
        <p>
            <input type="submit" value="submit" name="submit" />
        </p>

        </fieldset>

    </form>

    </body>
</html>