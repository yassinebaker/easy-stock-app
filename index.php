<?php
    session_start();
    // session_destroy();
    var_dump($_SESSION);
?>
<style>
    <?php include './public/css/bootstrap.min.css';
    include './public/css/main.css';
    ?>
</style>

<?php

    require_once('Controller/UserController.php');
    require_once('./helpers/formValidation.php');

    $user = new UserController();

    switch (parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH)) {
        case '/easy-stock-app/':
                require_once('./Views/Auth/Connexion.php');
            break;
        case '/easy-stock-app/login':
            $user->connexion();
            break;
        case '/easy-stock-app/inscription':
            $user->inscription();
        break;  
        // Chemin en cas de connexion 
        case '/easy-stock-app/accueil' && isset($_SESSION['user_id']) :
            require_once('./Views/inc/header.php');
            require_once('./Views/Dashboard.php');
        break;
        case '/easy-stock-app/commande/ajout' && isset($_SESSION['user_id']):
            require_once('./Views/inc/header.php');
            // commandes navbar
            require_once('./Views/commandes/commande_navbar.php');
            require_once('./Views/commandes/nouveau_commande.php');
        break;
        case '/easy-stock-app/commandes/encours':
            require_once('./Views/inc/header.php');
            require_once('./Views/commandes/commande_navbar.php');
            require_once('./Views/commandes/liste_commandes.php');
        break;  
        
        default:
                require_once('./Views/pageNonTrouvee.php');
            break;
    }
?>