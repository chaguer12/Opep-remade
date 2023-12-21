<?php
require_once('../class/database.con.php');
require_once('../class/Plant.php');
class PlantDAO
{
    private $db;
    public function __construct()
    {
        $this->db = Database::getInstance()->getConnection();
    }
    public function __set($property, $value)
    {
        $this->$property = $value;
    }
    public function __get($property)
    {
        return $this->$property;
    }
    public function setPlant($p_name, $p_price, $categorie, $img)
    {
        $query = "INSERT INTO plant(Name,price,categorieId,image) VALUES (?,?,?,?)";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(1, $p_name);
        $stmt->bindParam(2, $p_price);
        $stmt->bindParam(3, $categorie);
        $stmt->bindParam(4, $img);
        $stmt->execute();
        header("location:../view/dashboard.php");
    }
    public function deletePlant($id)
    {
        $query = "DELETE FROM plant WHERE IdPlant=?";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(1, $id);
        $stmt->execute();
        header("location:../view/dashboard.php");
    }
    public function getPlant()
    {
        $query = "SELECT * FROM categorie";
        $stmt = $this->db->query($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function editPlant($id, $p_name, $p_price, $categorie, $img)
    {
        $query = "UPDATE plant SET Name=:name,price=:price,CategorieId=:category,image=:image WHERE IdPlant=:id";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':name', $p_name, PDO::PARAM_STR);
        $stmt->bindParam(':price', $p_price, PDO::PARAM_INT);
        $stmt->bindParam(':category', $categorie, PDO::PARAM_INT);
        $stmt->bindParam(':image', $img, PDO::PARAM_STR);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();

        header("location:../view/dashboard.php");
    }
    public function getSpesPlant($id)
    {
        $query = "SELECT * FROM plant where IdPlant = :id";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':id', $id);
        if ($stmt->execute()) {
            return $stmt->fetch(PDO::FETCH_ASSOC);
        }
        else{
            echo "No category found!";
        }
    }
    public function getPlant1()
    {
        $query = "SELECT * FROM plant";
        $stmt = $this->db->query($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
