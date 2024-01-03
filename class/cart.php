<?php
class Cart{
    private $ID_cart;
    private $ID_user;
    private $ID_plant;
    
    public function __construct($ID_cart,$ID_user,$ID_plant){
        $this->ID_cart=$ID_cart;
        $this->ID_user=$ID_user;
        $this->ID_plant=$ID_plant;

        
    }
    public function getCart(){
        return $this->ID_cart;
    }
    public function getUserId(){
        return $this->ID_user;
    }
    public function getPlantId(){
        return $this->ID_plant;
    }
   



    
}