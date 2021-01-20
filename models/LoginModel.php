<?php

class LoginModel
{
   


    public function verif_login($login , $password)
    {
        return App::getDb()->query('
            SELECT *
            FROM visiteur
            WHERE login = ?'
            , [$login] );

    }


    public function getVisiteur( $id)
    {
        return App::getDb()->query('
        SELECT  *
        FROM visiteur
        WHERE id = ?'
        , [$id] );

    }

    public function getVehicule()
    {
        return App::getDb()->query("SELECT vehicule_puissance.nom as puissance ,vehicule_carburant.nom as carburant, vehicule.fraisforfait , vehicule.id 
        FROM vehicule
        JOIN  vehicule_carburant ON vehicule_carburant.id = vehicule.carburant_id 
        JOIN  vehicule_puissance ON vehicule_puissance.id = vehicule.puissance_id  
        ORDER BY `carburant` ASC , `puissance` ASC		
        ; " );

    }

    public function addUser($visiteur)
    {
        return App::getDb()->query("
        INSERT INTO `visiteur` ( `nom`,`id`, `prenom`, `login`, `mdp`, `adresse`, `cp`, `ville`, `dateEmbauche`, `vehicule_id`, `groupe_id`) 
        VALUES ( '".$visiteur['nom']."','".$visiteur['login']."','".$visiteur['prenom']."','".$visiteur['login']."','".$visiteur['mdp']."','".$visiteur['adresse']."','".$visiteur['cp']."','"
        .$visiteur['ville']."','".$visiteur['dateEmbauche']."','".$visiteur['vehicule_id']."','".$visiteur['groupe_id']."' )
        ");    

    }


    public function updateVisiteur($id,$visiteur)
	{

		$req= "UPDATE `visiteur` SET ";
		foreach ($visiteur as $key => $value) 
		{
			$req = $req. "`".$key."` = '".$value."',";
		}

		$req = substr($req,0,-1);				// j'ai besoin d'enlever la dernier virgule
		$req = $req." WHERE id ='".$id."'";
		
		
		PdoGsb::$monPdo->exec($req);
	}



}