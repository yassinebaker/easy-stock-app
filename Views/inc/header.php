
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Easy Stock</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
  </head>
  <body>
  <?php if (isset($_SESSION['role']) && $_SESSION['role']=='1') : ?>
    <!-- Header Admin -->
    <header class='d-flex justify-content-between px-4 align-items-center '>
      <nav class="navbar navbar-expand-lg navbar-light  p-3">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          
          <div class="navbar-nav">
            <a class="nav-item nav-link text-orange" href="/easy-stock-app/accueil">Accueil</a>
            <a class="nav-item nav-link" href="/easy-stock-app/client/tout">Gestion Clients</a>
            <a class="nav-item nav-link" href="#">Gestion Fournisseurs</a>
            <a class="nav-item nav-link" href="/easy-stock-app/produit">Gestion Stocks</a>
            <a class="nav-item nav-link" href="#">Gestion Livraisons</a>
            <a class="nav-item nav-link" href="#">Gestion Facturations</a>
            <a class="nav-item nav-link" href="/easy-stock-app/commandes/encours">Gestion Commandes</a>
            <a class="nav-item nav-link" href="/easy-stock-app/logout">Deconnexion</a>
          </div>
        </div>
      </nav>
       <!--user icon and username  -->
      <div class='d-flex align-items-center  p-2'>
        <ion-icon name="person" class='h3 text-orange'></ion-icon>
        <small class="  rounded mx-2">
          <?php echo $_SESSION['username']?>
        </small>
      </div>  
    </header>
    <!-- Header Login -->
    <?php elseif(count($_SESSION)==0) :?>
      
     <?php else :?>
      <!-- Header Client -->
      <header class='d-flex justify-content-between px-4 align-items-center'>
          <nav class="navbar navbar-expand-lg navbar-light  p-3">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
              
              <div class="navbar-nav">
                <a class="nav-item nav-link text-orange" href="/easy-stock-app/accueil">Accueil</a>
                <a class="nav-item nav-link" href="/easy-stock-app/logout">Deconnexion</a>
              </div>
            </div>
          </nav>
        <div class='d-flex align-items-center  p-2'>
            <ion-icon name="person" class='h3 text-orange'></ion-icon>
            <small class="  rounded mx-2">
              <?php echo $_SESSION['username']?>
            </small>
        </div>  
      </header>
  <?php endif ?>