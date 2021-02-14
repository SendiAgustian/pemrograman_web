<?php
//function start lagi
session_start();

//cek apakah session terdaftar
if (isset($_SESSION['email'])) {
    //session terdaftar, saatnya logout
    session_unset();
    session_destroy();
    header("location:../");
} else {
    //variabel session salah, user tidak seharusnya ada dihalaman ini. Kembalikan ke login
    header("location:../");
}
