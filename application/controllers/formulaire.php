<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    class Formulaire extends CI_Controller {

	public function index()
	{
		$this->affichage_form();
	}
    
    public function affichage_form($param)
    {
        $data['menu_presta'] = $this->menu->index();
        $data['news'] = $this->news->index();
        $content = $this->load->view('formulaire_'.$param, $data, true);
        $this->load->view('content', array('content'=>$content));
    }
    
    public function traitement_form($param)
	{
        $this->form_validation->set_rules('societe', '"Société"', 'trim|required|xss_clean');
        $this->form_validation->set_rules('secteur', '"Secteur d\'activité"', 'trim|required|xss_clean');
        $this->form_validation->set_rules('mail', '"E-mail"', 'trim|required|valid_email|xss_clean');
        $this->form_validation->set_rules('interlocuteur', '"Interlocuteur"', 'trim|required|xss_clean');
        $this->form_validation->set_rules('fonction', '"Fonction"', 'trim|required|xss_clean');
        $this->form_validation->set_rules('adresse', '"Adresse"', 'trim|required|xss_clean');
        $this->form_validation->set_rules('standard', '"N° du standard"', 'trim|required|xss_clean');
        $this->form_validation->set_rules('direct', '"N° de ligne direct"', 'trim|required|xss_clean');
        $this->form_validation->set_rules('inputVolume', '"Volume Moyen Mensuel"', 'trim|required|xss_clean');
        $this->form_validation->set_rules('inputAncien', '"Ancienneté des créances"', 'trim|required|xss_clean');
        $this->form_validation->set_rules('inputLocal', '"Localisation des créances"', 'trim|required|xss_clean');
        $this->form_validation->set_rules('inputMontantM', '"Montant moyen des créances"', 'trim|required|xss_clean');
        $this->form_validation->set_rules('inputMontantT', '"Montant total des créances"', 'trim|required|xss_clean');
        $this->form_validation->set_rules('inputDate', '"Date de cession"', 'trim|required|xss_clean');        
        
        if ($this->form_validation->run() == false) {
            $data['menu_presta'] = $this->menu->index();
            $data['news'] = $this->news->index();
            $content = $this->load->view('formulaire_'.$param, $data, true);
            $this->load->view('content', array('content'=>$content));
        }
        else
        {
            $data['menu_presta'] = $this->menu->index();
            $data['news'] = $this->news->index();
            $data['footer_presta'] = $this->footer->index();
            $content = $this->load->view('formulaire_valide', $data, true);
            $this->load->view('content', array('content'=>$content));
        }
	}
    
    public function send_form()
	{
        $this->email(
        
        );
	}
    
}