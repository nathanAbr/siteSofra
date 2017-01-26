<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Quisommesnous extends CI_Controller {

	public function index()
	{
		$this->affichage_qsn();
	}
    
    public function affichage_qsn()
	{
        $this->load->model('qsn_model');
        $data = array();
        $data['qsn'] = $this->qsn_model->get_qsn();
        $data['news'] = $this->news->index();
        $data['menu_presta'] = $this->menu->index();
        $content = $this->load->view('quisommesnous', $data, true);
        $this->load->view('content', array('content'=>$content));
        
	}
    
}