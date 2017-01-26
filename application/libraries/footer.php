<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Footer{

    public function index()
    {
        $CI =& get_instance();
        $CI->load->model('prestations_model');
        $data = array();
        $data['footer'] = $CI->prestations_model->recup_prestations();
        
        $footer_presta = $CI->load->view('footer', $data, true);
        $CI->load->view('footer', array('footer_presta' => $footer_presta));
    }
}