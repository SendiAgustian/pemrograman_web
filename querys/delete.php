<?php
include_once 'connect.php';
// Cek Koneksi Database
if ($conn === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$id = mysqli_real_escape_string($conn, $_GET['id']);
$sql = "DELETE FROM tb_contents WHERE id='$id'";
if (mysqli_query($conn, $sql)) {
    header("location: ../admin/index.php");
    echo 'berhasil hapus';
} else {
    header("location: ../resto/index.php?pesan=Menu masih ada, tidak bisa dihapus");
}
