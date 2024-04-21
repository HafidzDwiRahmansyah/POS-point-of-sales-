<?php
include "../app/db.php";
session_start();

if (isset($_POST['login'])) {
    $name = $_POST['name'];
    $pass = $_POST['pass'];

    $login = $conn->query("SELECT * FROM users WHERE username = '$name' AND password = '$pass'");
    $cek = mysqli_num_rows($login);

    if ($cek > 0) {
        echo "<script>alert('Login berhasil')
        location.replace('../views/')</script>";
        $_SESSION['adm'] = $login->fetch_assoc();
    } else {
        echo "<script>alert('Login gagal')
        location.replace('../')</script>";
    }
}
