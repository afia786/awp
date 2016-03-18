<?php
class PagesModel extends CI_Model{
	function __construct(){
	parent::__construct();
	}

	function getUsers(){
	$query = $this->db->get('users');
	return $query->result();
	}

	function insertUsers($fname,$lname){
		$newUser = array(
  
      'firstname' => $fname ,
      'lastname' => $lname 
      
   );

   $this->db->insert('users', $newUser); 
	}
}








?>