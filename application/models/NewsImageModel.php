<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class NewsImageModel extends CI_Model {

	var $id;
	var $idNews;
	var $position;
	var $imageUrl;
	

	function __construct()
    {
        parent::__construct();
    }

    function insert() {
    	$idNews = $this->input->post('idNews');
        $position= $this->input->post('position');
        $imageUrl = $this->input->post('imageUrl');
    
    	$this->db->insert('newsImage', $this);
    }

    function update() {
        $idNews = $this->input->post('idNews');
        $position= $this->input->post('position');
        $imageUrl = $this->input->post('imageUrl');
    

    	$this->db->update('newsImage', $this);
    }

    function selectById($id) {
		// $this->firephp->log('test');
    	$query = $this->db->query('SELECT * FROM newsImage WHERE id = '. $id);
    	$newsImage = $query->result();
    	$newsImage = $newsImage[0];
    	// $this->firephp->log($newsImage);
    	
    	return $newsImage;
    }

    function selectByIdNews($id) {
        // $this->firephp->log('test');
        $query = $this->db->query('SELECT * FROM newsImage WHERE idNews = '. $id);
        $newsImage = $query->result();


        return $newsImage;
    }
    function select() {
    	$query = $this->db->get('news');
        return $query->result();
    }


}
