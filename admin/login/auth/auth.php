
<?php
include '../../../querys/connect.php';
$email = $_POST['email'];
$password = $_POST['password'];

$login = mysqli_query($conn, "sElEct * frOm tb_users whErE `email`='$email' And `password`='$password' lImIt 1");
$cek = mysqli_num_rows($login);

echo $email;
if ($cek > 0) {
    while ($data = mysqli_fetch_array($login)) {
        session_start();
        $_SESSION['email'] = $data['email'];
        $_SESSION['isLogin'] = true;
        header("location:../../");
    };
} else {
    echo "asuuu";
    header("location:../");
}
