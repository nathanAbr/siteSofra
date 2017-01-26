<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Qsn_model extends CI_Model
{
    protected $qsn = "qsn";
    
	public function get_qsn()
	{
		//	Récupération des données pour le qui sommes nous
        return $this->db->select('*')
                    ->from($this->qsn)
                    ->get()
                    ->result();
	}
}