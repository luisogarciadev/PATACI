<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RoleModel extends CI_Model {

    var $id;
    var $name;
    

    function __construct()
    {
        parent::__construct();
    }

    function insert() {
        $name = $this->input->post('name');
       

        $this->db->insert('role', $this);

    }

    function update() {
        $id = $this->input->post('id');
        $name = $this->input->post('name');

        $this->db->where('id', $id);       
        $this->db->update('role', $this);

    }

    function selectById($id) {
        $roleQuery = $this->db->query('SELECT * FROM role WHERE id = '. $id);
        $role = $roleQuery->result();
        $role = $role[0];

        return $role;
    }

    function select() {
        $query = $this->db->get('role');
        return $query->result();
    }


}
