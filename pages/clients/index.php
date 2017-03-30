<h2>Liste des clients</h2>


<table class="table table-bordered text-center col-md-12">
	<thead>
		<tr>
			<td>Nom Prénom</td>
		</tr>
	</thead>
	<tbody>
		
	</tbody>

<?php foreach (App::getInstance()->getTable("Client")->all() as $client): ?>
	<tr>
		<td><?= $client->identite ?></td>
	</tr>


<?php endforeach; ?>

</table>
