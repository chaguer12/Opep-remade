<?php
require_once('../class/database.con.php');
require_once('../class/user.php');
session_start();

class UserDAO{
    private $db;
    public function __construct()
    {
        $this->db = Database::getInstance()->getConnection();
    }

    public function setUser($firstname,$lastname,$email,$password){
    
        $query ="INSERT INTO user (FirstName,LastName,Email,Password) VALUES(:fname,:lname,:email,:pwd)";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(":fname",$firstname);
        $stmt->bindParam(":lname",$lastname);
        $stmt->bindParam(":email",$email);
        $stmt->bindParam(":pwd",$password);
        $stmt->execute();
        $_SESSION['email'] = $email;
        header("Location: ../view/singup2.php");
        
        


    }

    public function setRole($role,$email){
        $query = "UPDATE user SET RoleID = :role WHERE Email = :email";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(":role",$role);
        $stmt->bindParam(":email",$email);
        $stmt->execute();
        header("location: ../view/SingIn.php");
        
    }
    public function Login($email,$password){
        $query = "SELECT * FROM user WHERE Email = :email AND Password = :password";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(":email",$email);
        $stmt->bindParam(":password",$password);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $role = $result[0]['RoleId'];

        
        if(count($result) == 1 && $role == 1){
            $_SESSION['user_email'] = $email;
            header("Location: ../view/index.php");
        
        }elseif(count($result) == 1 && $role == 2){
            $_SESSION['user_email'] = $email;
            header("Location: ../view/dashboard.php");
        
        }elseif(count($result) == 1 && $role == null){
            $_SESSION['user_email'] = $email;
            header("Location: ../view/singup2.php");
        
        }
    
    }

    public function getUser(){
        $query = "SELECT * FROM user";
        $stmt = $this->db->query($query);
        $stmt->execute();
        $userData = $stmt->fetchAll();
        $users = array();
        foreach($userData as $user){
            $users[] = new user($user['userid'],$user['firstname'],$user['lastname'],$user['email'],$user['password'],$user['password'],$user['userRole']);

        }
        return $users;

    }


}