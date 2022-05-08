<section class="h-100">
	<div class="container h-100">
		<div class="row justify-content-sm-center h-10">
			<div class="col-xxl-4 col-xl-5 col-lg-5 col-md-7 col-sm-9  w-100">
				<div class="text-center my-5">
                    <h1>Nouvelle Commande </h1>
				</div>
        <div class='d-flex shadow-lg p-5 gap-5 align-items-start'>
                <form method="POST" class="w-50" novalidate="" autocomplete="off">
                    <div class="mb-3">
                        <label class="mb-2 text-muted" for="name">Saisir produit</label>
                        <input id="name" type="text" class="form-control" name="name" value="" required autofocus>
                        <div class="invalid-feedback">
                            Veuillez entrer le Nom	
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="mb-2 text-muted" for="name">Choisir produit</label>
                        <input id="name" type="text" class="form-control" name="name" value="" required autofocus>
                        <div class="invalid-feedback">
                            Veuillez entrer le Nom	
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="mb-2 text-muted" for="name">Quantité</label>
                        <input id="name" type="number" class="form-control" name="name" value="" required autofocus>
                        <div class="invalid-feedback">
                            Veuillez entrer le Nom	
                        </div>
                    </div>
                    <div class="align-items-center d-flex my-4">
                        <button type="submit" class="btn text-white ms-auto rounded-btn bg-purple">
                            Ajouter au panier
                        </button>
                    </div>
                </form>
                <div class="w-50">
                    <table class="table table-bordeless mt-4" >
                        <thead class="bg-purple text-white">
                            <tr>
                            <th scope="col">Réf produit</th>
                            <th scope="col">Prix Unitaire</th>
                            <th scope="col">Quantité</th>
                            <th scope="col">Total (FCFA)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <th scope="row">Eau de Javel </th>
                            <td>250</td>
                            <td>2</td>
                            <td>500</td>
                            </tr>
                            <tr>
                            <th scope="row">Pot Lait 250g</th>
                            <td>600</td>
                            <td>4</td>
                            <td>24</td>
                            </tr>
                        </tbody>
                    </table>
                    <h5 class="my-4">Total Panier : 850 FCFA</h5>
                    <form method="POST" class="" novalidate="" autocomplete="off">
                    <div class="mb-3">
                        <label class="mb-2 text-muted" for="name">Code Client</label>
                        <input id="name" type="number" class="form-control" name="name" value="" required autofocus>
                        <div class="invalid-feedback">
                            Veuillez entrer le Nom	
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="mb-2 text-muted" for="name">Date de livraison</label>
                        <input id="name" type="date" class="form-control" name="name" value="" required autofocus>
                        <div class="invalid-feedback">
                            Veuillez entrer le Nom	
                        </div>
                    </div>
                    <div class="align-items-center d-flex">
                        <button type="submit" class="btn text-white ms-auto rounded-btn bg-purple">
                            Commander
                        </button>
                    </div>
                </form>
                </div>
        </div>
    </div>
</section>  