<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

	public function index()
	{
		$this->affichage_contact();
	}
    
    public function affichage_contact()
	{
        $this->load->model('contact_model');
        $data = array();
        $data['contact'] = $this->contact_model->get_contact();
        
        $data['menu_presta'] = $this->menu->index();
        $data['news'] = $this->news->index();
        $content = $this->load->view('contact', $data, true);
        $this->load->view('content', array('content'=>$content));
        
	}
    
}