<?php
    require_once('./config/database.php');
    $testingSomething = 'Lorem Ipsum';
    class User 
    {
        private $conn = null;

        public function __construct(){
            $this->conn = new Database();
            $this->conn = $this->conn->getmyDB();
        }

        public function register(){
            $stmt = $this->conn->prepare('INSERT INTO utilisateur 
            (nom,email,telephone,mot_de_passe,adresse) VALUES
            ');
            $stmt->execute();
            $datas =$stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        public function login(){
            $stmt = $this->conn->prepare('SELECT * FROM cashier');
            $stmt->execute();
            $datas =$stmt->fetchAll(PDO::FETCH_ASSOC);
        }
    }