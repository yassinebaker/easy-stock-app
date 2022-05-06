<?php
class FormValidator 
{
    public $passwordValidation = "/^(.{0,7}|[^a-z]*|[^\d]*)$/i"; 
    public $nameValidation = "/^[a-zA-Z0-9]*$/";
    public $mobileNumberValidation = "/^[0-9]{10}+$/";

  
    public function __construct(){

    }
    public function loginFormvalidator($data)
    {
    
        if($_SERVER['REQUEST_METHOD'] == 'POST')
        {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data =
            [
                'email' => trim($_POST['email']),
                'mot_de_passe' => trim($_POST['mot_de_passe'])
            ];
            echo($data['email']);

            if (empty($data['email'])) {
                $data['erreurMail'] = "Veuillez entrez l'adresse mail";
            } elseif (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
                $data['erreurMail'] = 'Format mail incorrect';
            }
            if(empty($data['mot_de_passe'])){
                $data['erreurMot_de_passe'] = 'Veuillez entrez le mot de passe';
              } elseif(strlen($data['mot_de_passe']) < 6){
                $data['erreurMot_de_passe'] = 'Le mot de passe doit comporter au moins 8 caractères';
              } elseif (preg_match($passwordValidation, $data['mot_de_passe'])) {
                $data['erreurMot_de_passe'] = 'Le mot de passe doit comporter une valeur numerique.';
              }

              if (empty($data['erreurMail']) && empty($data['erreurMot_de_passe'])) 
              {
                    return true;
              }
        }
    
    }
}