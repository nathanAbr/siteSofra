<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Offre_model extends CI_Model
{
    protected $offres = "offres";
    
	public function get_offres_comptabilite()
	{
		//	Récupération des données pour les offres comptables
        return $this->db->select('*')
                    ->from($this->offres)
                    ->where('service_offre = "COMPTABILITE"')
                    ->get()
                    ->result();
	}
    
    public function get_offres_commerciale()
	{
		//	Récupération des données pour les offres commerciale
        return $this->db->select('*')
                    ->from($this->offres)
                    ->where('service_offre = "COMMERCIALE"')
                    ->get()
                    ->result();
	}
    
    public function get_offres_recouvrement()
	{
		//	Récupération des données pour les offres recouvrement
        return $this->db->select('*')
                    ->from($this->offres)
                    ->where('service_offre = "RECOUVREMENT"')
                    ->get()
                    ->result();
	}
    
    public function get_offres_enquete()
	{
		//	Récupération des données pour les offres enquetes
        return $this->db->select('*')
                    ->from($this->offres)
                    ->where('service_offre = "ENQUETE"')
                    ->get()
                    ->result();
	}
}