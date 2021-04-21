<?php

class Login_model extends CI_Model {

    function login($username,$pass){		
		$query = $this->db->query('select * from table_user where username = "'.$username.'" and password = "'.$pass.'"');
		return $query->result_array();
	}	
}