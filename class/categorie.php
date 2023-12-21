<?php
class category{
    private $Id_category;
    private $Cat_name;

    public function __construct($Id_category,$Cat_name){
        $this->Id_category=$Id_category;
        $this->Cat_name=$Cat_name;
    }
    public function getId_category(){
        return $this->Id_category;
    }
    public function getCat_name(){
        return $this->Cat_name;
    }
}