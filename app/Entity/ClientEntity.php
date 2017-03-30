<?php
namespace App\Entity;
use Core\Entity\Entity;

/**
*class pour stocker un enregistrement de la table client
**/

class ClientEntity extends Entity {
	
	public function getIdentite(){
		return strtoupper($this->nom).' '.ucfirst($this->prenom);
	} //met le nom en majuscule et la 1erer lettre du prenom
}