<?php
$sum =0;
foreach($data as $value){$sum += $value['quantite']*$value['prix'];}
?>
<section class="h-100">
	<div class="container h-100">
		<div class="row justify-content-sm-center h-10">
			<div class="col-xxl-4 col-xl-5 col-lg-5 col-md-7 col-sm-9  w-100">
				<div class="text-center mt-5">
                    <h1>Liste Produits</h1>
                    <?php if(isset($_POST['nom'])==false || $_POST['nom']==''):?>
                        <button onclick="imprimer()" type="submit" class="my-2 btn rounded-btn bg-purple-light mb-2">
                            Imprimer l'inventaire
                        </button>
                    <?php endif ?>
				</div>
                <form method="POST" class="needs-validation d-flex align-items-center gap-4" novalidate="" autocomplete="off">
								<div class="mb-3 w-25">
									<label class="mb-2 text-muted" for="email">Désignation</label>
									<input id="email" type="text" placeholder='Dolima' class="form-control" name="nom" value="" required autofocus>	
								</div>
                                <button type="submit" class="btn rounded-btn bg-purple text-white  ms-auto">
                                    Rechercher
                                </button>
							</form>
        <div class='shadow-lg print'>    
            <table class="table table-bordeless" >
                        <thead class="bg-purple text-white">
                            <tr>
                            <th scope="col" class="text-center">ID</th>
                            <th scope="col" class="text-center">Désignation</th>
                            <th scope="col" class="text-center">Prix Unitaire </th>
                            <th scope="col" class="text-center">Quantité</th>
                            <th scope="col" class="text-center">Catégorie</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach($data as $value): ?>
                            <tr>
                                <td class="text-center"><?php echo $value['id'] ?></td>
                                <td class='text-center'><?php echo $value['designation'] ?></td>
                                <td class="text-center"><?php echo $value['prix'] ?> FCFA</td>
                                <td class="text-center"><?php echo $value['quantite'] ?></td>
                                <td class="text-center"><?php echo $value['categorie'] ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                        <?php if(count($data)<1)
                            echo "<p class='text-center p-2'>Aucun Resultat</p>";
                            ?>
                            <?php if(isset($_POST['nom'])==false || $_POST['nom']==''):?>   
                                <div class='d-flex align-items-center justify-content-between p-2'>
                                    <div class='d-flex h5'>
                                        <p>Montant Total</p> 
                                       <p class='mx-4'><?php echo $sum. ' FCFA'?></p> 
                                    </div>
                                </div>
                            <?php endif ?>
                </div>
    </div>
</section>      