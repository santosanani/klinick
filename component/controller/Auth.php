<?php
session_start();
include "../model/Auth.php";
include "../dao/Aut.php";

if(isset($_POST['username']) && isset($_POST['password'])) {
    $username = (string) strip_tags($_POST['username']);
    $password = (string) strip_tags($_POST['password']);

    $authDao = new \dao\Aut();

    if ($authDao->signin(new \model\Auth($username, $password))) {
        $_SESSION['identification'] = $authDao->getIdentification();
        header("location: ../../view/");
    } else {
        header("location: ../../view/signin.php");
        $_SESSION['error'] = "Password or username incorrect";
    }
} else {
    $_SESSION['error'] = "Password or username incorrect";
    header("location: ../../view/signin.php");
}
