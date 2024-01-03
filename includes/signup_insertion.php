<?php
    require_once('../core/user.dao.php');

$user = new UserDAO();

if(isset($_POST['submit'])){
    $firstname= $_POST['first'];
    $lastname = $_POST['last'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $_SESSION['user_email'] = $email;    
    $user ->setUser($firstname,$lastname,$email,$password);
}
if(isset($_POST['valid'])){
    $role = $_POST['role'];
    $email = $_SESSION['user_email'];  
    $user ->setRole($role,$email);



    
}