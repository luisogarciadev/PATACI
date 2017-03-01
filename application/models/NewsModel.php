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
    	$text = $this->input->post('newsText');
        $this->load->library('session');
    	$idUser = $this->session->userdata('idUser');
    	$date = date("Y-m-d H:i:s");

        $data = array(
           'header' => $header,
           'subHeader' => $subHeader,
           'text' => $text,
           'idUser' => $idUser,
           'headerImage' => "",
           'visible' => 1,
           'date' => $date
        );

    	$this->db->insert('news', $data);
    }

    function update() {
        // $this->firephp->log($this->input->post('header'));

        

    	$header = $this->input->post('header');
    	$subHeader = $this->input->post('subHeader');
    	$text = $this->input->post('newsText');
        // $this->firephp->log($this->input->post('newsText'));

     //    // $this->load->library('session');
    	// // $idUser = $this->session->userdata('idUser');
    	// // $headerImage = $this->input->post('headerImage');
    	// // $visible = $this->input->post('visible');

     //    $this->firephp->log('test');
        $data = array(
               'header' => $header,
               'subHeader' => $subHeader,
               'text' => $text
            );

        $this->db->where('id', $this->input->post('id'));
    	$this->db->update('news', $data);
        // $this->firephp->log('test');
    }

    function selectById($id) {
		// $this->firephp->log('test');
    	$query = $this->db->query('SELECT * FROM news WHERE id = '. $id);
    	$news = $query->result();
    	$news = $news[0];
    	$userQuery = $this->db->query('SELECT * FROM user WHERE id = '. $news->idUser);
    	$user = $userQuery->result();
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
