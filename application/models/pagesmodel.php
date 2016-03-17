<?php
class PagesModel extends CI_Model{
	function __construct(){
	parent::__construct();
	}

	function getUsers(){
	$query = $this->db->get('users');
	return $query->result();
	}
}








?>