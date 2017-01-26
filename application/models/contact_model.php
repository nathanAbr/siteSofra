<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact_model extends CI_Model
{
    protected $contact = "contact";
    
	public function get_contact()
	{
		//	Récupération des données pour le contact
        return $this->db->select('*')
                    ->from($this->contact)
                    ->get()
                    ->result();
	}
}