<?php
session_start();

function CheckAdminSession(){
    
    if (!isset($_SESSION)) {
        header('location: ../view/signin.php');
    }
    else if ($_SESSION['RoleId'] != 2) {
        header('location: ../view/index.php');
    }

}
function CheckClientSession(){
    if (!isset($_SESSION)) {
        header('location: ../view/signin.php');
    }
    else if ($_SESSION['RoleId'] != 1) {
        header('location: ../view/index.php');
    }
}

if (isset($_GET["lougout"])){
    session_destroy();
    header('location: ../view/signin.php?session=destroyed');
}
