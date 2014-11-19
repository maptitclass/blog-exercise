<?php
// CETTE METHODE PERMET DE CHARGER PLUSIEURS FICHIERS DE CLASSE SANS UTILISER DES INCLUDES
// AVEC CETTE FONCTION ON NE SE FAIS PLUS DES SOUCIS POUR GERER LES INCLUDES
spl_autoload_register("my_autoload");
function my_autoload($class)
{
	$filepath = str_replace("_","/",$class).".class.php"; 
	if(file_exists($filepath)) // VERIFIER SI LE FICHIER EXISTE
	{
		require_once($filepath); // VA CHERCHER LE FICHIER
	}
}