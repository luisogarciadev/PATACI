<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserModel extends CI_Model {

	var $id;
	var $username;
	var $password;
	var $firstName;
	var $lastName;
	var $idRole;
    var $active;

	function __construct()
    {
        parent::__construct();
    }

    function insert() {
    	$username = $this->input->post('username');
    	$password = $this->input->post('password');

    	$this->db->insert('user', $this);
    }

    function update() {
    	$header = $this->input->post('header');
    	$subHeader = $this->input->post('subHeader');
    	$text = $this->input->post('text');
    	$idUser = $this->input->post('idUser');
    	$headerImage = $this->input->post('headerImage');
    	$visible = $this->input->post('visible');

    	$this->db->update('news', $this);
    }

    function selectById($id) {
    	$userQuery = $this->db->query('SELECT * FROM user WHERE id = '. $id);
    	$user = $userQuery->result();
        $user = $user[0];

    	return $user;
    }

    function select() {
    	$query = $this->db->get('user');
        return $query->result();
    }


}
