<?php
include_once 'querys/connect.php';
$result = mysqli_query($conn, "SELECT * FROM tb_contents");
// echo $result;
?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

  <!-- My CSS -->
  <link rel="stylesheet" href="css/langingpage.css">

  <!-- My Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">

  <title>Sendi Agustian | 19552011018</title>
</head>

<body>
  <!-- Nav Bar -->
  <nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
      <a class="navbar-brand" href="#">Sendi Agustian</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="btn btn-primary tombol" href="admin/login/" tabindex="-1" aria-disabled="true">CRUD</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Akhir Nav Bar -->

  <!-- Jumbotron -->
  <div class="jumbotron jumbotron-fluid">
    <div class="container">
      <h1 class="display-4">Get work done <span>faster</span><br> and <span>better</span> with us</h1>
    </div>
  </div>
  <!-- Akhir Jumbotron -->

  <!-- Container -->
  <div class="container">
    <!-- Info Panel -->
    <div class="row justify-content-center">
      <div class="col-10 info-panel">
        <div class="row">
          <div class="col-lg">
            <img src="img/employee.png" alt="employee" class="float-left">
            <h4>24 Hours</h4>
            <p>Lorem ipsum dolor sit amet.</p>
          </div>
          <div class="col-lg">
            <img src="img/hires.png" alt="hires" class="float-left">
            <h4>24 Hours</h4>
            <p>Lorem ipsum dolor sit amet.</p>
          </div>
          <div class="col-lg">
            <img src="img/security.png" alt="security" class="float-left">
            <h4>24 Hours</h4>
            <p>Lorem ipsum dolor sit amet.</p>
          </div>
        </div>
      </div>
    </div>
    <!-- Akhir Info Panel -->

    <!-- Contents -->
    <?php
    $i = 1;
    while ($row = mysqli_fetch_array($result)) {
    ?>
      <div class="row workingspace">
        <div class="col-lg">
          <img src="img/contents/<?php echo $row["cover"]; ?>" alt="<?php echo $row["cover"]; ?>" class="img-fluid">
        </div>
        <div class="col">
          <h3><?php echo $row["title"]; ?></h3>
          <p><?php echo $row["content"]; ?></p>
          <a href="galery.php" class="btn btn-primary tombol">gallery</a>
        </div>
      </div>
    <?php
      $i++;
    }
    ?>
    <!-- Akhir Contents -->

    <!-- Testimonial -->
    <section class="testimonial">
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <h5>"Berkerja dengan suasana hati ang lebih baik dan mempelajari hal baru setiap harinya"</h5>
        </div>
      </div>

      <div class="row justify-content-center">
        <div class="col-lg-6 d-flex justify-content-center">
          <figure class="figure">
            <img src="img/img1.png" class="figure-img img-fluid rounded-circle" alt="testi 1">
          </figure>
          <figure class="figure">
            <img src="img/img2.png" class="figure-img img-fluid rounded-circle active" alt="testi 2">
            <figcaption class="figure-caption">
              <h5>Shanny Ye</h5>
              <p>Designer</p>
            </figcaption>
          </figure>
          <figure class="figure">
            <img src="img/img3.png" class="figure-img img-fluid rounded-circle" alt="testi 3">
          </figure>
        </div>
      </div>
    </section>
    <!-- Akhir Testimonial -->

    <!-- Footer -->
    <div class="row footer">
      <div class="col text-center">
        <p>2020 | 19552011018 Sendi Agustian TIF-RM-19A</p>
      </div>
    </div>
    <!-- Akhir Footer -->
  </div>
  <!-- Akhir COntainer -->

  <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</body>

</html>