<?php
    session_start();
    require_once('./Views/inc/header.php'); 

    require_once('Controller/UserController.php');
    require_once('Controller/ProduitController.php');

    $user = new UserController();
    $produit = new ProduitController();

    if (parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH)=='/easy-stock-app/')
     {
         if(isset($_SESSION['user_id'])==false)
         {
            $user->connexion();
         }else
         {
            header("location:/easy-stock-app/accueil");
         }
    }elseif (parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH)=='/easy-stock-app/login') 
    {
      
        if(isset($_SESSION['user_id'])==false)
        {
           $user->connexion();
        }else
        {
            header("location:/easy-stock-app/accueil");
        }
    }elseif (parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH)=='/easy-stock-app/inscription') 
    {
        if(isset($_SESSION['user_id'])==false)
        {
            $user->inscription('Inscription');   
        }else
        {
            header("location:/easy-stock-app/accueil");
        }

    }elseif (parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH)=='/easy-stock-app/accueil' && isset($_SESSION['user_id'])) 
    {
      
        require_once('./Views/Dashboard.php');

    }elseif (parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH)=='/easy-stock-app/commande/ajout' && isset($_SESSION['user_id'])) 
    {
      
            // commandes navbar
            require_once('./Views/commandes/commande_navbar.php');
            require_once('./Views/commandes/nouveau_commande.php');
    }
    elseif (parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH)=='/easy-stock-app/commandes/encours' && isset($_SESSION['user_id']) && $_SESSION['role']!=='0') 
    {
      
                require_once('./Views/commandes/commande_navbar.php');
                require_once('./Views/commandes/liste_commandes.php');

    }elseif (parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH)=='/easy-stock-app/client/tout' && isset($_SESSION['user_id']) && $_SESSION['role']!=='0') 
    {    
        require_once('./Views/Clients/client_navbar.php');
        $user->toutLesUsers();
    }elseif (parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH)=='/easy-stock-app/client/ajout' && isset($_SESSION['user_id']) && $_SESSION['role']!=='0') 
    {
        require_once('./Views/Clients/client_navbar.php');
        $user->inscription('Ajout Client');   
    }elseif (parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH)=='/easy-stock-app/produit') 
    {
        require_once('./Views/Produits/produit_navbar.php');
        $produit->toutLesProduits();
                
    }elseif (parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH)=='/easy-stock-app/produit/ajout') 
    {
        require_once('./Views/Produits/produit_navbar.php');
        $produit->AjouterUnProduit();             
    }elseif (parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH)=='/easy-stock-app/logout') 
    {
                require_once('./helpers/logout.php');
    }
    
    else{
        require_once('./Views/pageNonTrouvee.php');
    }
  
?>

<style>
    <?php include './public/css/bootstrap.min.css';
    include './public/css/main.css';
    ?>
</style>

<?php include './Views/inc/footer.php'?>