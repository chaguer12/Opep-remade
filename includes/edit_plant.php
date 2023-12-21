<?php
require_once('../core/plant.dao.php');

if (isset($_POST['edit'])) {
    $plantName = $_POST['name'];
    $price = $_POST['price'];
    $image = $_FILES['image'];
    $tmp_name = $_FILES['image']['tmp_name'];
    $image = file_get_contents($tmp_name);
    $category = $_POST['category'];
    $id = $_POST['id'];
    $plant = new PlantDAO();
    $plant->editPlant($id, $plantName, $price, $category, $image);
}
