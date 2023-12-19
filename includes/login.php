<?php
require_once('../core/user.dao.php');
if (isset($_POST['login'])) {
    if (empty($_POST['email']) || empty($_POST['password'])) {
        header('Location: ../view/singin.php?error=empty');
        exit();
    }
    $email = $_POST['email'];
    $password = $_POST['password'];
    $user = new UserDAO();
    $user->login($email, $password);
}
