<?php

include_once 'connect.php';
// Cek Koneksi Database
if ($conn === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

if (isset($_POST['upload'])) {
    // ambil data file
    $cover = $_FILES['file']['name'];
    $namaSementara = $_FILES['file']['tmp_name'];

    // Escape user inputs for security
    $title = mysqli_real_escape_string($conn, $_REQUEST['title']);
    $content = mysqli_real_escape_string($conn, $_REQUEST['content']);
    $deskripsi = mysqli_real_escape_string($conn, $cover);

    // tentukan lokasi file akan dipindahkan
    $dirUpload = "../img/contents/";

    // pindahkan file
    $terupload = move_uploaded_file($namaSementara, $dirUpload . $cover);
    // Attempt insert query execution
    $sql = "INSERT INTO tb_contents VALUES (null, '$title', '$content', '$cover')";
    if (mysqli_query($conn, $sql)) {
        header("location: ../admin/index.php");
        echo 'berhasil nambah';
    } else {
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
    }
}
