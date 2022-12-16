<?php

$sql = new sql();
$message = "";
$username = $_POST["username"];
$password = $_POST["password"];
$users = $sql->fetch("select * from user where username=:username", [":username" => $username]);

if (count($users)==0) {
    $message = "Username or password is not correct";
} else {
    $user=$users[0];
    if (password_verify($password, $user["password"])) {
        $_SESSION["user"]=$user;
        header("location: {$base_url}home.php");
    } else {
        $message = "Username or password is not correct";
    }
}
