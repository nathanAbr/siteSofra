<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu{

    public function index()
    {
        $CI =& get_instance();
        $CI->load->model('prestations_model');
        $CI->load->model('slide_model');
        $data = array();
        $data['menu'] = $CI->prestations_model->recup_prestations();
        $data['carousel'] = $CI->slide_model->get_slider();
        $menu_presta = $CI->load->view('menu', $data, true);
        $CI->load->view('menu', array('menu_presta' => $menu_presta));
    }
}