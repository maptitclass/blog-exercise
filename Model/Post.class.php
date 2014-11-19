<?php
// LE FICHIER Post.class.php sera un model php qui va contenir 
// tous les requêtes SQL concernant les articles (posts) 
//la base des données crée

class Model_Post 
//Model est le nombre du dossier et Post le nom de la classe
{
	public function getPost($id)
	{
	  // renvoie le post d'id $id
	}
	public function getLatestPost($number)
	{
		//renvoie les x derniers post (x=$number)
	}
}