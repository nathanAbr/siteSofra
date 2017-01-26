<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class News_model extends CI_Model
{
    protected $news = "news";
    
    public function recup_news()
    {
        return $this->db->select('*')
                    ->from($this->news)
                    ->get()
                    ->result();
    }
}