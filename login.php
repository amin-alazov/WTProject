<?php
session_start();

$valid_username = "b231210576@sakarya.edu.tr";
$valid_password = "b231210576";

$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

if ($username === $valid_username && $password === $valid_password) {
    $_SESSION['username'] = $username;
    echo "<!DOCTYPE html>
<html lang='tr'>
<head>
    <meta charset='UTF-8'>
    <title>Giriş Başarılı</title>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css' rel='stylesheet'>
</head>
<body class='bg-light'>
    <div class='container mt-5'>
        <div class='alert alert-success text-center'>
            Hoşgeldiniz $password
        </div>
    </div>
</body>
</html>";
} else {
    header("Location: login.html");
    exit();
}
?>
