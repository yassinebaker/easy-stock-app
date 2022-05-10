<?php
    // require('Controller.php');
    class ProduitController extends Controller{
       public $produitModel;

       public function __construct(){
        $this->produitModel =$this->model('Produit');
       }
        public function toutLesProduits(){
            $searchQuery = '';

            if($_SERVER['REQUEST_METHOD'] == 'POST')
                        {
                            $searchQuery = trim($_POST['nom']);
                        }
            $produits = $this->produitModel->getAllProduits($searchQuery);

            $this->view('/Produits/liste_produits', $produits);
        }
        public function AjouterUnProduit(){
            $data = [
                'designation' => '',
                'prix' => '',
                'quantite' => '',
                'categorie' => 'Aucun',
                'erreurDesignation' => '',
                'erreurPrix' => '',
                'erreurQuantite' => '',
            ];
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        
                      $data = [
                        'designation' => trim($_POST['designation']),
                        'prix' => trim($_POST['prix']),
                        'quantite' => trim($_POST['quantite']),
                        'categorie' => trim($_POST['categorie']),
                        'erreurDesignation' => '',
                        'erreurPrix' => '',
                        'erreurQuantite' => '',
                    
                    ];
                    if (empty($data['designation'])) {
                        $data['erreurDesignation'] = 'Veuillez entrez la désignation du produit';
                    } if (empty($data['prix'])) {
                        $data['erreurPrix'] = 'Veuillez entrez le prix unitaire du produit';
                    }  if (empty($data['quantite'])) {
                        $data['erreurQuantite'] = 'Veuillez entrez la quantité du produit';
                    } 


                    if (empty($data['erreurDesignation']) && empty($data['erreurPrix']) && empty($data['erreurQuantite'])) 
                    {
                        if ($this->produitModel->ajoutProduit($data)) {
                            //Redirect to the login page
                            header('location: /easy-stock-app/produit');
                        } else {
                            die('Something went wrong.');
                        }
                    }
                }
                $this->view('/Produits/nouveau_produit',$data);
        }
    }  
?>