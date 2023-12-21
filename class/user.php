<?php

class User {
    private $userid;
    private $firstname;
    private $lastname;
    private $email;
    private $password;
    private $userRole;

    public function __construct($U_id,$first,$last,$email,$pass,$role)
    {
        $this->userid = $U_id;
        $this->firstname = $first;
        $this->lastname = $last;
        $this->email = $email;
        $this->password = $pass;
        $this->userRole = $role;


    }

    public function getUserID(){
        return $this->userid;
    }
    public function getFirstName(){
        return $this->firstname;
    }
    public function getLastName(){
        return $this->lastname;
    }
    public function getUserEmail(){
        return $this->email;
    }
    public function getUserPass(){
        return $this->password;
    }
    public function getUserRole(){
        return $this->userRole;
    }
}