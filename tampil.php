<?php
include 'koneksi.php';
$data = mysqli_query($conn, "SELECT * FROM kegiatan");
$no = 1;
while ($row = mysqli_fetch_assoc($data)) {
    echo "<tr>
        <td>$no</td>
        <td>
            <h3><span>{$row['nama_kegiatan']}</span></h3>
            <p>{$row['deskripsi']}</p>
            <div class='action-buttons'>
                <a href='edit.php?id={$row['id']}' class='btn-edit'>Edit</a>
                <a href='hapus.php?id={$row['id']}' class='btn-delete' onclick='return confirm(\"Yakin ingin hapus data ini?\")'>Hapus</a>
            </div>
        </td>
        <td><img src='upload/{$row['foto']}' width='100'></td>
    </tr>";
    $no++;
}
?>
