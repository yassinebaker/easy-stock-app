
<section class="h-100">
	<div class="container h-100">
		<div class="row justify-content-sm-center h-10">
			<div class="col-xxl-4 col-xl-5 col-lg-5 col-md-7 col-sm-9  w-100">
				<div class="text-center my-5">
                    <h1>Commande En cours</h1>
				</div>
                <form method="POST" class="needs-validation d-flex align-items-center gap-4" novalidate="" autocomplete="off">
								<div class="mb-3 w-25">
									<label class="mb-2 text-muted" for="email">Nom Client</label>
									<input id="email" type="email" placeholder='Ousmane Sonko' class="form-control" name="email" value="" required autofocus>	
								</div>

								<div class="mb-3 w-25">
									<div class="mb-2 w-100">
										<label class="text-muted" for="password">Code Client</label>
									</div>
									<input id="password" type="text" placeholder="001124"class="form-control" name="password" required>
								</div>

                                <button type="submit" class="btn rounded-btn bg-purple  ms-auto">
                                    Rechercher
                                </button>
							</form>
        <div class='shadow-lg'>    
            <table class="table table-bordeless" >
                        <thead class="bg-purple text-white">
                            <tr>
                            <th scope="col">Numéro commandes</th>
                            <th scope="col">Date</th>
                            <th scope="col">Code Client</th>
                            <th scope="col">Nom Complet</th>
                            <th scope="col">Produit</th>
                            <th scope="col">P.U</th>
                            <th scope="col">Qty commandé</th>
                            <th scope="col">PTTC (FCFA)</th>
                            <th scope="col">Date livraison</th>
                            <th scope="col">Qty livrée</th>
                            <th scope="col">Reste a livrée</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <th scope="row" class="text-center">341</th>
                            <td>15 Juin 2022</td>
                            <td class='text-center'>2</td>
                            <td class="text-center">Yacine Diakhaté</td>
                            <th>Eau de Javel </th>
                            <td class="text-center">250</td>
                            <td class="text-center">2</td>
                            <td class="text-center">500</td>
                            <td class="text-center"> 18 Aout 2022</td>
                            <td class="text-center">1</td>
                            <td class="text-center text-danger">1</td>
                            </tr>
                            <tr>
                            <th scope="row" class="text-center">341</th>
                            <td>15 Juin 2022</td>
                            <td class='text-center'>2</td>
                            <td class="text-center">Yacine Diakhaté</td>
                            <th>Eau de Javel </th>
                            <td class="text-center">250</td>
                            <td class="text-center">2</td>
                            <td class="text-center">500</td>
                            <td class="text-center"> 18 Aout 2022</td>
                            <td class="text-center">1</td>
                            <td class="text-center text-danger">1</td>
                            </tr>
                        </tbody>
            </table>

            <div class="d-flex align-items-center justify-content-around">
                <h4 class=''>Montant total des commandes en cours</h4>
                <h4>205 000 FCFA</h4>
            </div>
        </div>
    </div>
</section>  