<?php
include 'koneksi.php';
$id = $_GET['id'];
$data = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM kegiatan WHERE id = $id"));

if (isset($_POST['submit'])) {
    $nama = $_POST['nama_kegiatan'];
    $deskripsi = $_POST['deskripsi'];

    if ($_FILES['foto']['name']) {
        $foto = $_FILES['foto']['name'];
        move_uploaded_file($_FILES['foto']['tmp_name'], "upload/" . $foto);
        $query = "UPDATE kegiatan SET nama_kegiatan='$nama', deskripsi='$deskripsi', foto='$foto' WHERE id=$id";
    } else {
        $query = "UPDATE kegiatan SET nama_kegiatan='$nama', deskripsi='$deskripsi' WHERE id=$id";
    }

    mysqli_query($conn, $query);
    header("Location: index.php");
}
?>

<section class="form-container">
    <h2 class="heading">Edit <span>Kegiatan</span></h2>
    <link rel="stylesheet" href="style.css">
    <form method="POST" enctype="multipart/form-data">
        <input type="text" name="nama_kegiatan" value="<?= $data['nama_kegiatan'] ?>" required><br>
        <textarea name="deskripsi" required><?= $data['deskripsi'] ?></textarea><br>
        <input type="file" name="foto"><br>
        <button type="submit" name="submit" class="btn">Update</button>
    </form>
    <br>
    <a href="index.php" class="btn">← Kembali</a>
</section>
