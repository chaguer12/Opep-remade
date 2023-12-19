<?php
class Database{
    private $host = "localhost";
    private $db_name = "opep2";
    private $username = "root";
    private $password = "";
    private static $instance;
    private $connection;

    private function __construct() {
        try {
            $this->connection = new PDO("mysql:host={$this->host};dbname={$this->db_name}", $this->username, $this->password);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Connection failed: " . $e->getMessage());
        }
    }

    public static function getInstance(){
        if(!self::$instance){
            self::$instance = new Database();
        }
        return self::$instance;
    }

    public function getConnection(){
        return $this->connection; 
    }
    

}