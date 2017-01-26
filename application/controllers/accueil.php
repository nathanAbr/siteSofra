<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Accueil extends CI_Controller {

	public function index()
	{
		$this->affichage_accueil();
	}
    
    public function affichage_accueil()
	{
        $this->load->model('accueil_model');
        $data = array();
        $data['accueil'] = $this->accueil_model->get_accueil();
        $data['menu_presta'] = $this->menu->index();
        $data['news'] = $this->news->index();
        $content = $this->load->view('accueil', $data, true);
        $this->load->view('content', array('content'=>$content));
	}
    
}
