<?php
require_once('../core/cart.dao.php');

$plant_id = $_POST['PlantId'];
$user_id = $_POST['UserId'];
if(isset($_POST['addToCart'])){
    $cart = new CartDAO;
    $cart-> insertInCart($plant_id,$user_id);
    header('location: ../view/cart.php');
   

}