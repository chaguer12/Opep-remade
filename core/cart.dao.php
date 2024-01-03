<?php
require_once('../class/cart.php');
require_once('../class/database.con.php');
class CartDAO {
    private $db ;
    
    public function __construct()
    {
        $this->db = Database::getInstance()->getConnection();
    }

    public function insertInCart($plant_id,$user_id){
        $query= "INSERT INTO cart (PlantId,UserId) VALUES (:plantid,:userid)";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(":plantid",$plant_id);
        $stmt->bindParam(":userid",$user_id);
        $stmt->execute();
        return $stmt;
        
    }
    public function getCart($user_id){
        $query= "SELECT * FROM cart WHERE UserId = :userid";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(":userid",$user_id);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
}

    public function CountCart($userid){
        $query = "SELECT COUNT(*) FROM `cart` where UserId = :userid";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(":userid",$userid);
        $stmt->execute();
        $result = $stmt->fetch();
        implode($result);
        return $result;
    }
}
