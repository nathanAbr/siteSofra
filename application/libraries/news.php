<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News{

    public function index()
    {
        $CI =& get_instance();
        $CI->load->model('news_model');
        $data = array();
        $data['news'] = $CI->news_model->recup_news();
        
        $news_affich = $CI->load->view('news', $data, true);
        $CI->load->view('news', array('news_affich' => $news_affich));
    }
}