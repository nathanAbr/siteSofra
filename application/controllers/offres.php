<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Offres extends CI_Controller {

	public function index()
	{
		$this->affichage_offre();
	}
    
    public function affichage_offre()
	{
        $this->load->model('offre_model');
        $data = array();
        $data['offre_comptabilite'] = $this->offre_model->get_offres_comptabilite();
        $data['offre_commerciale'] = $this->offre_model->get_offres_commerciale();
        $data['offre_recouvrement'] = $this->offre_model->get_offres_recouvrement();
        $data['offre_enquete'] = $this->offre_model->get_offres_enquete();
        
        $data['menu_presta'] = $this->menu->index();
        $data['news'] = $this->news->index();
        $content = $this->load->view('offre', $data, true);
        $this->load->view('content', array('content'=>$content));
	}
    
}