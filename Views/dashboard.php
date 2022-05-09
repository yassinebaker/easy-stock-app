<div class="px-4 text-center d-flex flex-column justify-content-center align-items-center vh-100">
      <div class="bg-purple p-3 rounded-circle my-4"><ion-icon name="cart" class='display-1 text-white'></ion-icon></div>
    <h1 class="display-5 fw-bold">Bienvenue sur Easy Stock</h1>
    <div class="col-lg-6 mx-auto">
      <p class="lead mb-4">Avec l'application Easy Stock. Soyez au controle de votre magasin.</p> 
      <?php if($_SESSION['role']=='1') :?>
        <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
          <button type="button" class="btn btn-lg px-4 gap-3 rounded-btn bg-purple text-white">Allez au Stock</button>
        </div>
        <?php else : ?>
        <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
          <button type="button" class="btn btn-lg px-4 gap-3 rounded-btn bg-purple text-white">
            <a class="text-white text-decoration-none"href="/easy-stock-app/commande/ajout">Commander</a>
          </button>
        </div>
        <?php endif;?>
    </div>
  </div>
<?php include 'inc/footer.php'?>