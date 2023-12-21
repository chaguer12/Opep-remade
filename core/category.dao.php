<?php
require_once('../class/database.con.php');
require_once('../class/categorie.php');
class CategoryDAO{
    private $db;

    public function __construct(){
        $this->db = Database::getInstance()->getConnection();
}
    public function addCategory($category){
        $query = "INSERT INTO categorie (CategorieName) VALUES (?)";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(1, $category);
        $stmt->execute();
        header("Location: ../view/dashboard.php");
    
    }
    public function DeleteCat($category_id){
        $query = "DELETE FROM categorie WHERE IdCategorie = ?";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(1, $category_id);
        $stmt->execute();
        header("Location: ../view/dashboard.php");
        
    }
}