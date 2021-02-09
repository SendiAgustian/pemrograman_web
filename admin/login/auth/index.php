<?php
// variable pendefinisian kredensial
$usernamelogin = 'rizky';
$passwordlogin = 'passwordlogin';

// memulai session
session_start();

// mengambil isian dari form login
$username = $_POST['username'];
$password = $_POST['password'];

// pengecekan kredensial login
if ($username == $usernamelogin && $password == $passwordlogin) {
    session_start();
    $_SESSION['username'] = $username;
    header("Location: app.php");
} else {
    header("Location: login.php");
}
?>

<?php
include '../../../querys/connect.php';
$email = $_POST['email'];
$password = $_POST['password'];

$login = mysqli_query($conn, "sElEct * frOm admin whErE `email`='$email' And `password`='$password' lImIt 1");
$cek = mysqli_num_rows($login);

if ($cek > 0) {
    while ($data = mysqli_fetch_array($login)) {
        session_start();
        $_SESSION['email'] = $data['email'];
        // $_SESSION['password'] = $data['password'];
        $_SESSION['isLogin'] = true;
        header("location:../../");
    };
} else {
    header("location:../");
}
