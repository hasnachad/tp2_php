<?php
namespace App\Table;
use Core\Table\Table;

/**
*class pour la table utilisateur**/

class ClientTable extends Table 
{
	public function all(){
		return $this->query("SELECT clients.id,
							clients.nom,
							clients.prenom,
							clients.adresse,
							clients.birthdate,
							clients.codePostal,
							clients.telephone,
							statutMarital.statut as statutMarital
							FROM clients
							LEFT JOIN statutMarital
							ON statutMarital_id = statutMarital.id");
	}
	public function allBystatutMarital($id){
		return $this->query("SELECT clients.id,
							clients.nom,
							clients.prenom,
							clients.adresse,
							clients.birthdate,
							clients.code_postal,
							clients.numero_de_telephone,
							statutMarital.statut as statutMarital
							FROM clients
							LEFT JOIN statutMarital
							ON statutMarital_id = statutMarital.id
							WHERE statutMarital.id = ?",
							 [$id]);
	}

}
