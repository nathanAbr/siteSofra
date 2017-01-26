<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Accueil_model extends CI_Model
{
    protected $accueil = "accueil";
    
	public function get_accueil()
	{
		//	Récupération des données pour l'accueil
        return $this->db->select('*')
                    ->from($this->accueil)
                    ->get()
                    ->result();
	}
}