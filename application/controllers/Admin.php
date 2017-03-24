<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin extends CI_Controller {

	function __construct()
    {
        parent::__construct();
    	$this->load->library('session');
    	$this->isLoggedIn();
    }

	function index() {
		$data['title'] = "Administraci&oacute;n";
		$data['fullName'] = $this->session->userdata('fullName');
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
    	$data['fullName'] = $this->session->userdata('fullName');
    	$this->load->model('NewsModel');
    	$data['news'] = $this->NewsModel->select();	
    	$this->load->adminView("news", $data);
    }

    function newsEdit($id) {
    	$data['title'] = "Administraci&oacute;n Noticia";
    	$data['fullName'] = $this->session->userdata('fullName');
    	$this->load->model('NewsModel');
    	$data['news'] = $this->NewsModel->selectByID($id);	
    	$this->load->adminView("newsEdit", $data);
    }

    function newsAdd() {
    	$data['title'] = "Administraci&oacute;n Noticia";
    	$data['fullName'] = $this->session->userdata('fullName');
    	$this->load->adminView("newsAdd", $data);
    }

    function newsEditPost() {
    	$this->load->model('NewsModel');
    	$this->firephp->log('test');
    	$this->NewsModel->update();

    	redirect(base_url('admin/news'));
    }

    function newsAddPost() {
    	$this->load->model('NewsModel');
    	$this->NewsModel->insert();

    	redirect(base_url('admin/news'));
    }

    function users() {
    	$data['title'] = "Administraci&oacute;n Usuarios";
    	$data['fullName'] = $this->session->userdata('fullName');
    	$this->load->model('UserModel');
    	$data['users'] = $this->UserModel->select();	
    	$this->firephp->log($data['users']);
    	$this->load->adminView("users", $data);
    }

    function userEdit($id) {
    	$this->load->model('RoleModel');
    	$data['title'] = "Administraci&oacute;n Usuario";
    	$data['fullName'] = $this->session->userdata('fullName');
    	$this->load->model('UserModel');
    	$data['user'] = $this->UserModel->selectByID($id);
		$data['roles'] = $this->RoleModel->select();
    	$this->load->adminView("userEdit", $data);
    }

    function userEditPost() {
    	$this->load->model('UserModel');
    	$this->UserModel->update();

    	redirect(base_url('admin/users'));
    }

    function userAdd() {
    	$this->load->model('RoleModel');
    	$data['title'] = "Administraci&oacute;n Usuario";
    	$data['fullName'] = $this->session->userdata('fullName');
    	$data['roles'] = $this->RoleModel->select();
    	$this->load->adminView("userAdd", $data);
    }

    function userAddPost() {
    	$this->load->model('UserModel');
    	$this->UserModel->insert();

    	redirect(base_url('admin/users'));
    }

    function deleteUser($id) {
    	$this->load->model('UserModel');
    	$this->UserModel->delete($id);
    	redirect(base_url('admin/users'));
    }

    function deleteNews($id) {
    	$this->load->model('NewsModel');
    	$this->NewsModel->delete($id);
    	redirect(base_url('admin/news'));
    }
}
