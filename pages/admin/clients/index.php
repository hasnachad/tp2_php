<h2>Liste des clients</h2>
<p><a href="admin.php?p=clients.add">Ajouter un client</a></p>

<table class="table table-bordered text-center col-md-12">
	<thead>
		<tr>
			<td>Nom, prénom</td>
			<td>âge</td>
			<td>adresse</td>
			<td>numero de téléphone</td>
			<td>statut marital</td>
			<td></td>
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

		<td><form action="admin.php?p=clients.delete" method="post">
				<input type="hidden" name="id" value="<?= $client->id; ?>">
				<input class="btn btn-danger" type="submit" name="delete">
			</form>
	</tr>


<?php endforeach; ?>

</table>
