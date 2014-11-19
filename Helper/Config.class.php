<?php

class Helper_Config
{
	private $tableau;
	public function __construct($file)
	{
		if(file_exists($file)) //SI LE FICHIER EXISTE(EX.CONFIG.INI)
		{
			$this->tableau = parse_ini_file($file,true); //charge le fichier filename et retourne 
			//les configurations qui s'y trouvent sous forme d'un tableau associatif.
		}
		else
		{
			error_log('file "'.$file.'" could not be loaded');
		}

	}

	function get($key,$section = null)
	{
		if($section==null)
		{
			if(array_key_exists($key, $this->tableau))
			{
				return $this->tableau[$key];
			}
			else
			{
				error_log("value ".$key." not found");
				return null;
			}
		}
		else
		{
			if(array_key_exists($section, $this->tableau))
			{
				if(array_key_exists($key,$this->tableau[$section]))
				{
					return $this->tableau[$section][$key];
				}
				else
				{
					error_log('value "'.$key.'" not found in section '.$section);
					return null;
				}
			}
			else
			{
				error_log('value "'.$section.'" not found into the file ');
				return null;
			}
		}
	}
}


