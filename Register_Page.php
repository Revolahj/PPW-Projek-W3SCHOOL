<?php

if ($_REQUEST['REQUES_METHOD'] === 'POST') {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password_hash = password_hash($password, PASSWORD_DEFAULT);
    $data_user = $nama . " | " . $email . " | " . $password_hash . PHP_EOL;
    file_put_contents('users.txt', $data_user, FILE_APPEND);
    echo "<script>alert('Pendaftaran berhasil! Data tersimpan di file.'); window.location.href='login.php';</script>";

}