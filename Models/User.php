<?php
    require_once('./config/database.php');
    class User 
    {
        private $conn = null;

        public function __construct(){
            $this->conn = new Database();
            $this->conn = $this->conn->getmyDB();
        }

        public function register($data){
            
            $stmt = $this->conn->prepare("INSERT
            INTO utilisateur (nom,
            email, telephone,mot_de_passe,adresse)
             VALUES (:nom, :email,
            :telephone,:mot_de_passe,:adresse)");

            $stmt->bindParam(':nom', $data['nom']);
            $stmt->bindParam(':email', $data['email']);
            $stmt->bindParam(':telephone', $data['telephone']);
            $stmt->bindParam(':adresse', $data['adresse']);
            $stmt->bindParam(':mot_de_passe',$data['mot_de_passe']);

            if ($stmt->execute()) {
                return true;
            } else {
                return false;
            }
            // $datas =$stmt->fetchAll(PDO::FETCH_ASSOC);
           
        }
        public function EmailExisteDeja($email) {
            $stmt=$this->conn->prepare("SELECT * FROM utilisateur WHERE email =:email");
  
            $stmt->bindParam(':email', $email);
            //Check if email is already registered
            $stmt->execute();
            $data =$stmt->fetchAll(PDO::FETCH_ASSOC);
            return $data;
            if($data> 0) {
                return true;
            } else {
                return false;
            }
        }
        public function login($email,$mot_de_passe){
            $stmt = $this->conn->prepare("SELECT * FROM utilisateur WHERE email=:email");
            $stmt->bindParam(':email', $email);
            
            $stmt->execute();
            $datas =$stmt->fetch(PDO::FETCH_ASSOC);
            if ($datas) {
                $mot_de_passe_hashe =$datas['mot_de_passe'];
                if(password_verify($mot_de_passe,$mot_de_passe_hashe))
                {
                    return $datas;     
                }else
                {
                    return false;
                }
            }

        }
    }