<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class NewsModel extends CI_Model {

	var $id;
	var $header;
	var $subHeader;
	var $text;
	var $idUser;
	var $headerImage;
	var $visible;
	var $date;

	function __construct()
    {
        parent::__construct();
    }

    function insert() {
    	$header = $this->input->post('header');
    	$subHeader = $this->input->post('subHeader');
    	$text = $this->input->post('text');
    	$idUser = $this->input->post('idUser');
    	$headerImage = $this->input->post('headerImage');
    	$visible = $this->input->post('visible');
    	$date = date("Y-m-d H:i:s");

    	$this->db->insert('news', $this);
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
		// $this->firephp->log('test');
    	$query = $this->db->query('SELECT * FROM news WHERE id = '. $id);
    	$news = $query->result();
    	$news = $news[0];
    	// $this->firephp->log($news);
    	$userQuery = $this->db->query('SELECT * FROM user WHERE id = '. $news->idUser);
    	$user = $userQuery->result();
    	// $this->firephp->log($user);
    	$news->user = $user[0];

    	return $news;
    }

    function selectTop5() {

    	$query = $this->db->get('news', 5);
    	$this->db->order_by('id', 'desc');
        return $query->result();
    }

    function select() {
    	$query = $this->db->get('news');
        $this->db->order_by('id', 'desc');
        return $query->result();
    }


}
