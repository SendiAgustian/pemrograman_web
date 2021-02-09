<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Jekyll v4.1.1">
  <title>Login</title>


  <!-- Bootstrap core CSS -->
  <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/sign-in/">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

  <!-- My CSS -->
  <link href="../../css/auth.css" rel="stylesheet">

  <!-- Favicons -->
  <link rel="apple-touch-icon" href="/docs/4.5/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
  <link rel="icon" href="/docs/4.5/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
  <link rel="icon" href="/docs/4.5/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
  <link rel="manifest" href="/docs/4.5/assets/img/favicons/manifest.json">
  <link rel="mask-icon" href="/docs/4.5/assets/img/favicons/safari-pinned-tab.svg" color="#563d7c">
  <link rel="icon" href="/docs/4.5/assets/img/favicons/favicon.ico">
  <meta name="msapplication-config" content="/docs/4.5/assets/img/favicons/browserconfig.xml">
  <meta name="theme-color" content="#563d7c">

  <!-- Javascript -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</head>

<body class="text-center">
  <!-- <form class="form-signin" action="validasi()"> -->
  <form class="form-signin" action="auth" method="post" id="myForm" onsubmit=" return validasi()">
    <h1 class="h3 mb-3 font-weight-normal">Login</h1>
    <label for="inputEmail" class="sr-only">Email address</label>
    <input name="email" id="email" type="email" class="form-control" placeholder="Email address" required autofocus>
    <label for="inputPassword" class="sr-only">Password</label>
    <input name="password" id="password" type="password" class="form-control" placeholder="Password" required>
    <div class="mb-3">
      <span>Belum memiliki akun? <a href="signup.php">Sign Up</a></span>
    </div>
    <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
    <!-- Footer -->
    <div class="row footer">
      <div class="col text-center">
        <p>2020 | 19552011018 Sendi Agustian TIF-RM-19A</p>
      </div>
    </div>
    <!-- Akhir Footer -->
  </form>

</body>

<!-- <script type="text/javascript">
  function validasi() {
    var email = document.forms["myForm"]["email"].value;
    var password = document.forms["myForm"]["password"].value;
    if (email == "admin@email.com" && password == "123") {
      return true;
    } else {
      alert("Username atau password yang Anda masukan SALAH");
      return false;
    }
  }
</script> -->

</html>