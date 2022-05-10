<?php
    require('Controller.php');
    
    class UserController extends Controller
    {
        public $userModel ;

        public function __construct(){
            $this->userModel =$this->model('User');
        }
        public function inscription($title)
        {
            $data = [
                'title' =>$title,
                'nom' => '',
                'email' => '',
                'mot_de_passe' => '',
                'telephone' => '',
                'adresse' => '',
                'erreurNom' => '',
                'erreurMail' => '',
                'erreurMot_de_passe' => '',
                'erreurtelephone' => '',
                'erreurAdresse' => '',
            ];

            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        
                      $data = [
                        'title' =>$title,
                        'nom' => trim($_POST['nom']),
                        'email' => trim($_POST['email']),
                        'mot_de_passe' => trim($_POST['mot_de_passe']),
                        'telephone' => trim($_POST['telephone']),
                        'adresse' => trim($_POST['adresse']),
                        'erreurNom' => '',
                        'erreurMail' => '',
                        'erreurMot_de_passe' => '',
                        'erreurtelephone' => '',
                        'erreurAdresse' => '',
                    ];
        
                    $nameValidation = "/^[a-zA-Z0-9]*$/";
                    $passwordValidation = "/^(.{0,7}|[^a-z]*|[^\d]*)$/i";
                    $mobileNumberValidation = "/^[0-9]{10}+$/";
        
                
                    if (empty($data['nom'])) {
                        $data['erreurNom'] = 'Veuillez entrez le nom.';
                    } elseif (!preg_match($nameValidation, $data['nom'])) {
                        $data['erreurNom'] = 'Le nom ne peut contenir que des caractères alphanumeriques.';
                    }
        
                  
                    if (empty($data['email'])) {
                        $data['erreurMail'] = "Veuillez entrez l'adresse mail";
                    } elseif (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
                        $data['erreurMail'] = 'Format mail incorrect';
                    }
                     else {
                        //Check if email exists.
                        $this->userModel->EmailExisteDeja($data['email']);
                        if ($this->userModel->EmailExisteDeja($data['email'])) {
                        $data['erreurMail'] = 'Cet email existe deja. <a class="text-danger" href="/login">Connectez-vous</a>';
                        }
                    }
        
                    if(empty($data['mot_de_passe'])){
                      $data['erreurMot_de_passe'] = 'Veuillez entrez le mot de passe';
                    } elseif(strlen($data['mot_de_passe']) < 6){
                      $data['erreurMot_de_passe'] = 'Le mot de passe doit comporter au moins 8 caractères';
                    } elseif (preg_match($passwordValidation, $data['mot_de_passe'])) {
                      $data['erreurMot_de_passe'] = 'Le mot de passe doit comporter une valeur numerique.';
                    }
                    if(empty($data['telephone'])){
                        $data['erreurtelephone'] = 'Veuillez entrez le numéro de téléphone';
                      }elseif (preg_match($mobileNumberValidation, $data['telephone'])) {
                        $data['erreurtelephone'] = 'numéro téléphone invalide';
                      }
        
        
                      if (empty($data['adresse'])) {
                        $data['erreurAdresse'] = "Veuillez entrez l'adresse.";
                    }
                    if (empty($data['erreurNom']) && empty($data['erreurMail']) && empty($data['erreurMot_de_passe']) && empty($data['erreurtelephone']) && empty($data['erreurAdresse'])) {
        
                        // Hash password
                        $data['mot_de_passe'] = password_hash($data['mot_de_passe'], PASSWORD_DEFAULT);
        
                        //Register user from model function
                        if ($this->userModel->register($data)) {
                            //Redirect to the login page
                            header('location: /easy-stock-app/login');
                        } else {
                            die('Something went wrong.');
                        }
                    }
                }
                $this->view('/Auth/Inscription',$data);
        }
        public function connexion()
        {
            $data = [
                'email' => '',
                'mot_de_passe' => '',
                'erreurMail' => '',
                'erreurMot_de_passe' => '',
            ];
             if($_SERVER['REQUEST_METHOD'] == 'POST')
             {
    
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

                      $data = [
                        'email' => trim($_POST['email']),
                        'mot_de_passe' => trim($_POST['mot_de_passe']),
                        'erreurMail' => '',
                        'erreurMot_de_passe' => '',
                    ];
        
                    $passwordValidation = "/^(.{0,7}|[^a-z]*|[^\d]*)$/i";
        
                    //Validate username on letters/numbers
        
                    //Validate email
                    if (empty($data['email'])) {
                        $data['erreurMail'] = "Veuillez entrez l'adresse mail";
                    } elseif (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
                        $data['erreurMail'] = 'Format mail incorrect';
                    }
        
                   // Validate password on length, numeric values,
                    if(empty($data['mot_de_passe'])){
                      $data['erreurMot_de_passe'] = 'Veuillez entrez le mot de passe';
                    } elseif(strlen($data['mot_de_passe']) < 6){
                      $data['erreurMot_de_passe'] = 'Le mot de passe doit comporter au moins 8 caractères';
                    } elseif (preg_match($passwordValidation, $data['mot_de_passe'])) {
                      $data['erreurMot_de_passe'] = 'Le mot de passe doit comporter une valeur numerique.';
                    }

                    if (empty($data['erreurMail']) && empty($data['erreurMot_de_passe'])) 
                    {
                        $userconnecter = $this->userModel->login($data['email'],$data['mot_de_passe']);
                        if ($userconnecter) 
                        {
                            $this->createSession($userconnecter);
                            header("Location: /easy-stock-app/accueil");
                        }else {
                            $data['erreurMot_de_passe'] ='Mail ou mot de passe incorrect';
                        }
                    }
            }
                    $this->view('/Auth/Connexion',$data);
                }
                    public function createSession($user){
                        $_SESSION['user_id'] = $user['id'];
                        $_SESSION['username'] = $user['nom'];
                        $_SESSION['email'] = $user['email']; 
                        $_SESSION['role'] = $user['role']; 
                    }
                    public function logout() {
                        unset($_SESSION['user_id']);
                        unset($_SESSION['username']);
                        unset($_SESSION['email']);
                        header("location:/easy-stock-app/login");
                    }
                    
                    public function toutLesUsers()
                    {
                        $searchQuery = '';
                        $idQuery ='';
                        if($_SERVER['REQUEST_METHOD'] == 'POST')
                        {
                            $searchQuery = trim($_POST['nom']);
                            $idQuery = trim($_POST['id']);
                        }
                        $clients = $this->userModel->getAllUsers($searchQuery,$idQuery);

                        $this->view('/Clients/liste_client', $clients);
                    }
            }
            ?>