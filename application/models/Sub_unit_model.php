<?php 

class Sub_unit_model extends CI_Model {
	
	function tampil_data() {
		$this->db->select('tb_sub_unit.*,tb_unit.nama_unit');
		$this->db->from('tb_sub_unit');
		$this->db->join('tb_unit', 'tb_sub_unit.kode_unit = tb_unit.kode_unit', 'left'); 
		$query = $this->db->get();
		return $query->result_array();
		
    }
	
	function get_unit(){
		$this->db->select('*');
		$this->db->from('tb_unit');		
		$query = $this->db->get();
		return $query->result_array();
	}
	
	function input_data($table,$data){
		$this->db->insert($table,$data);
        return $this->db->insert_id();
	}
			
	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
		
	}	
	
	function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
	
	
	function edit($id){
		$this->db->select('tb_sub_unit.*,tb_unit.kode_unit,tb_unit.nama_unit');
		$this->db->from('tb_sub_unit');
		$this->db->join('tb_unit', 'tb_sub_unit.kode_unit = tb_unit.kode_unit', 'left'); 
		$this->db->where('tb_sub_unit.id_sub_unit',$id); 
		$query = $this->db->get();
		return $query->result_array();
	}
}
