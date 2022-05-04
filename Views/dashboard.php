<style>
    <?php include '../public/css/bootstrap.min.css';
    include '../public/css/main.css';
    require 'inc/header.php';
    ?>
</style>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <!-- <a class="navbar-brand" href="#">Navbar</a> -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="#">Accueil</a>
      <a class="nav-item nav-link" href="#">Gestion Clients</a>
      <a class="nav-item nav-link" href="#">Gestion Fournisseurs</a>
      <a class="nav-item nav-link" href="#">Gestion Stocks</a>
      <a class="nav-item nav-link" href="#">Gestion Livraisons</a>
      <a class="nav-item nav-link" href="#">Gestion Facturations</a>
      <a class="nav-item nav-link" href="#">Gestion Commandes</a>
    </div>
  </div>
</nav>
<div class="px-4 text-center d-flex flex-column justify-content-center align-items-center vh-100">
      <div class="bg-purple p-3 rounded-circle my-4"><ion-icon name="cart" class='display-1 text-white'></ion-icon></div>
    <h1 class="display-5 fw-bold">Bienvenue sur Easy Stock</h1>
    <div class="col-lg-6 mx-auto">
      <p class="lead mb-4">Avec l'application Easy Stock. Soyez au controle de votre magasin.</p> 
      <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
        <button type="button" class="btn btn-lg px-4 gap-3 rounded-btn bg-purple text-white">Allez au Stock</button>
      </div>
    </div>
  </div>
<?php include 'inc/footer.php'?>