<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Client extends CI_Controller {

	public function index()
	{
		$this->form_client();
	}
    
    public function form_client()
	{
        $data['menu_presta'] = $this->menu->index();
        $data['news'] = $this->news->index();
        $content = $this->load->view('form_client', $data, true);
        $this->load->view('content', array('content'=>$content));
	}
    
}