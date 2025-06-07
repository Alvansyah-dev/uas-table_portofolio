<?php
include 'koneksi.php';

if (isset($_POST['submit'])) {
    $nama = $_POST['nama_kegiatan'];
    $deskripsi = $_POST['deskripsi'];
    $foto = $_FILES['foto']['name'];
    $tmp = $_FILES['foto']['tmp_name'];

    move_uploaded_file($tmp, "upload/" . $foto);

    mysqli_query($conn, "INSERT INTO kegiatan (nama_kegiatan, deskripsi, foto) VALUES ('$nama', '$deskripsi', '$foto')");
    header("Location: index.php");
}
?>

<section class="form-container">
    <h2 class="heading">Tambah <span>Kegiatan</span></h2>
    <link rel="stylesheet" href="style.css">
    <form method="POST" enctype="multipart/form-data">
        <input type="text" name="nama_kegiatan" placeholder="Nama Kegiatan" required><br>
        <textarea name="deskripsi" placeholder="Deskripsi" required></textarea><br>
        <input type="file" name="foto" required><br>
        <button type="submit" name="submit" class="btn">Tambah</button>
    </form>
    <br>
    <a href="index.php" class="btn">← Kembali</a>
</section>
