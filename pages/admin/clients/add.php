<?php 
if(isset($_POST['nom'],$_POST['prenom'],$_POST['birthdate'],$_POST['adresse'],$_POST['codePostal'],$_POST['telephone'])){
	App::getInstance()->getTable('Client')->create([
		"nom" => $_POST['nom'],
		"prenom" => $_POST['prenom'],
		"birthdate" => $_POST['birthdate'],
		"adresse" => $_POST['adresse'],
		"codePostal" => $_POST['codePostal'],
		"telephone" => $_POST['telephone']]);
	header('Location: admin.php?p=clients');
}
?>
<h2>add utilisateur</h2>

<form action="admin.php?p=clients.add" method="post">
	<input class="text-center" type="text" name="nom" placeholder="Nom">
	<input class="text-center" type="text" name="prenom" placeholder="Prénom">
	<input class="text-center" type="date" name="birthdate" placeholder="Date de naissance">
	<input class="text-center" type="text" name="adresse" placeholder="Adresse complète">
	<input class="text-center" type="text" name="codePostal" placeholder="Code postal">
	<input class="text-center" type="text" name="telephone" placeholder="Numéro de téléphone">

	<input class="btn btn-success" type="submit" >
</form>

	