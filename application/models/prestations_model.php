<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Prestations_model extends CI_Model
{
    protected $prestations = "prestations";
    
	public function get_prestations($url)
	{
		//	Récupération des données pour les prestations
        return $this->db->select('*')
                    ->from($this->prestations)
                    ->where('nom_prestation = "'.$url.'"')
                    ->get()
                    ->result();
	}
    
    public function recup_prestations()
    {
        return $this->db->select('*')
                    ->from($this->prestations)
                    ->get()
                    ->result();
    }
}