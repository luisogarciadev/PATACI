<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin extends CI_Controller {

	function __construct()
    {
        parent::__construct();
    	$this->load->library('session');
    	$this->isLoggedIn();
    }

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	function index() {
		$data['title'] = "Administraci&oacute;n";
		$data['fullName'] = $this->session->userdata('userFirstName') . ' ' . $this->session->userdata('userLastName');
		$this->load->adminView("index", $data);
	}

	function isLoggedIn() {
        $isLoggedIn = $this->session->userdata('isLoggedIn');
        
        if(!isset($isLoggedIn) || $isLoggedIn != true) {
            redirect(base_url('login/index'));
        }
    }

    function news() {
		$data['title'] = "Administraci&oacute;n Noticias";
    	$data['fullName'] = $this->session->userdata('userFirstName') . ' ' . $this->session->userdata('userLastName');
    	$this->load->model('NewsModel');
    	$data['news'] = $this->NewsModel->select();	
    	$this->load->adminView("news", $data);
    }

    function newsEdit($id) {
    	$data['title'] = "Administraci&oacute;n Noticia";
    	$data['fullName'] = $this->session->userdata('userFirstName') . ' ' . $this->session->userdata('userLastName');
    	$this->load->model('NewsModel');
    	$data['news'] = $this->NewsModel->selectByID($id);	
    	$this->load->adminView("newsEdit", $data);
    }
}
