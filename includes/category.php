<?php
require_once('../core/category.dao.php');
if(isset($_POST['addCat'])){
    $category_name = $_POST['name'];
    $category = new CategoryDAO();
    $category->addCategory($category_name);
}
if(isset($_POST['deleteCategory'])){
    $category_id = $_POST['categoryId'];
    $category = new CategoryDAO();
    $category->DeleteCat($category_id);
}