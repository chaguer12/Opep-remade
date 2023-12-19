<?php
class Plant{
   private $plantID;
   private $p_name;
   private $price;
   private $image;
   private $categoryid;

   public function __construct($plantID,$p_name,$price,$categoryid){
      $this->plantID=$plantID;
      $this->p_name=$p_name;
      $this->price=$price;
      $this->categoryid=$categoryid;
   
}
   public function getplantID(){
      return $this->plantID;
   }
   public function getp_name(){
      return $this->p_name;
   
   }
   public function getprice(){
      return $this->price;
   }
   public function getcategoryid(){
      return $this->categoryid;
   }
   public function getimage(){
      return $this->image;
   }

}