<h2>Liste détaillée des clients</h2>


<table class="table table-bordered text-center col-md-12">
	<thead>
		<tr>
			<td>Nom Prénom</td>
			<td>Date de naissance</td>
			<td>Adresse</td>
			<td>Téléphone</td>
			<td>Statut marital</td>
		</tr>
	</thead>
	<tbody>
		
	</tbody>

<?php foreach (App::getInstance()->getTable("Client")->all() as $client): ?>
	<tr>
		<td><?= $client->identite ?></td>
		<td><?= $client->birthdate ?></td>
		<td><?= $client->adresse.' '.$client->codePostal ?></td>
		<td><?= $client->telephone ?></td>
		<td><?= $client->statutMarital ?></td>
	</tr>


<?php endforeach; ?>

</table>