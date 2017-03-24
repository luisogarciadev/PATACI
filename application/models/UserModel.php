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
    	$this->username = $this->input->post('username');
    	$this->password = $this->input->post('password');
        $this->firstName = $this->input->post('firstName');
        $this->lastName = $this->input->post('lastName');
        $this->idRole = $this->input->post('idRole');
        $this->active = 1;

    	$this->db->insert('user', $this);

    }

    function update() {
        $firstName = $this->input->post('firstName');
        $lastName = $this->input->post('lastName');
        $idRole = $this->input->post('idRole');

        $data = array(
           'firstName' => $firstName,
           'lastName' => $lastName,
           'idRole' => $idRole
        );
    	
        $this->db->where('id', $this->input->post('id'));    
    	$this->db->update('user', $data);
    }

    function selectById($id) {
    	$userQuery = $this->db->query('SELECT * FROM user WHERE id = '. $id);
    	$user = $userQuery->result();
        $user = $user[0];

    	return $user;
    }

    function select() {
        $this->db->where('active', 1);
    	$query = $this->db->get('user');
        $this->firephp->log($query);
        return $query->result();
    }

    function delete($id) {
        $data = array(
            'active' => 0
        );
        $this->db->where('id', $id);
        $this->db->update('user', $data);  
    }

    function login() {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $this->firephp->log($username);
        $this->firephp->log($password);

        $userQuery = $this->db->query('SELECT * FROM user WHERE username = \''. $username. '\' AND password = \''.$password.'\' AND active = 1');
        $user = $userQuery->result();
        if (isset($user[0])) {
            $user = $user[0];
            return $user;
        }

        return NULL;
    }


}
