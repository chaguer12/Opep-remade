<?php
require_once('../core/plant.dao.php');
if(isset($_POST['save'])){
    $plantname = $_POST['name'];
    $price = $_POST['price'];
    $categorie = $_POST['category'];
    $image = $_FILES['image'];
    $tmp_name= $_FILES['image']['tmp_name'];
    $image = file_get_contents($tmp_name);

    $plant = new PlantDAO();
    $plant->setPlant($plantname,$price,$categorie,$image);
}
if(isset($_POST['deletePlant'])){
    $plantid = $_POST['IdPlant'];
    $plant = new PlantDAO();
    $plant->deletePlant($plantid);
}