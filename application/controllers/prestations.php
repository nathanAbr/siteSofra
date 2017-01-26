<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Prestations extends CI_Controller {

	public function index()
	{
		$this->affichage_prestations();
	}
    
    public function affichage_prestations($url)
	{
        $this->load->model('prestations_model');
        $data = array();
        $data['prestations'] = $this->prestations_model->get_prestations($url);
        $data['menu_presta'] = $this->menu->index();
        $data['news'] = $this->news->index();
        $content = $this->load->view('prestations', $data, true);
        $this->load->view('content', array('content'=>$content));
	}
    
}