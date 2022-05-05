<?php
    require('Models/User.php');
    class UserController
    {
        public $model ;

        public function __construct(){
            $this->model = new User();
        }
        public function SigninAction(){
            $this->model->login();
            require('./Views/Auth/Connexion.php');
        }
    }
?>