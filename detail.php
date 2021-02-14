<?php
include_once 'querys/connect.php';
$id = $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM tb_contents WHERE id = $id");
$detail =  mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- My CSS -->
    <link rel="stylesheet" href="css/gallery.css">
</head>

<body>
    <div class="container">
        <div class="section-title" data-aos="fade-up">
            <h2><?php echo $detail["title"]; ?></h2>
            <div class="col-lg-3 col-md-4">
                <div class="gallery-item" data-aos="zoom-in" data-aos-delay="100">
                    <a href="img/contents/<?php echo $detail["cover"]; ?>" class="venobox" data-gall="gallery-item">
                        <img src="img/contents/<?php echo $detail["cover"]; ?>" alt="" class="img-fluid">
                    </a>
                </div>
            </div>
            <p><?php echo $detail["content"]; ?></p>
        </div>

        <!-- Footer -->
        <div class="row footer">
            <div class="col text-center">
                <p>2020 | 19552011018 Sendi Agustian TIF-RM-19A</p>
            </div>
        </div>
        <!-- Akhir Footer -->
    </div>
</body>

</html>