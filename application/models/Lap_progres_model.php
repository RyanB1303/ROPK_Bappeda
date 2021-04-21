<?php 

class Lap_progres_model extends CI_Model {
	
	function get_sub_unit($unit){
		$this->db->select('*');
		$this->db->from('tbl_sub_unit');	
		$this->db->where('id_sub_unit',$unit);			
		$query = $this->db->get();
		return $query->result_array();
	}
	
}
