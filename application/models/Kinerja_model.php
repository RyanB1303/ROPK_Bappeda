<?php 

class Kinerja_model extends CI_Model {
	
	function get_sub_unit($unit){
		$this->db->select('*');
		$this->db->from('tbl_sub_unit');		
		$this->db->where('id_sub_unit',$unit);			
		$query = $this->db->get();
		return $query->result_array();
	}
	
	function get_bulan(){
		$this->db->select('*');
		$this->db->from('tb_bulan');		
		$query = $this->db->get();
		return $query->result_array();
	}
	
	function val_bidang($unit){
		$query = $this->db->query('select a.kode_unit, b.kode_bidang, b.nama_bidang from tb_unit a, tb_bidang b 
									where a.kode_bidang = b.kode_bidang
									and a.kode_unit="'.$unit.'"');
		return $query->result_array();		
	}
	
	function get_data($bidang,$unit){
		$query = $this->db->query('SELECT 
							(SELECT COUNT(kode_program) FROM tb_program WHERE kode_bidang = "'.$bidang.'") as jml_program, 
							(SELECT COUNT(kode_kegiatan) FROM tb_kegiatan join tb_program on tb_kegiatan.kode_program = tb_program.kode_program
							join tb_bidang on tb_program.kode_bidang = tb_bidang.kode_bidang WHERE kode_bidang = "'.$bidang.'") as jml_kegiatan, 
							nama_unit from tb_unit where kode_unit="'.$unit.'"');
		return $query->result_array();		
	}
	
	
	function get_data_table($unit){
		$query = $this->db->query('select a.kode_program, a.nama_program, b.kode_kegiatan, b.nama_kegiatan, c.kode_sub_kegiatan, c.nama_sub_kegiatan, d.kode_unit 
									from tb_program a, tb_kegiatan b, tb_sub_kegiatan c, tb_unit d where a.kode_program = b.kode_program 
									and b.kode_kegiatan = c.kode_kegiatan and a.kode_bidang = d.kode_bidang and d.kode_unit = "'.$unit.'"');
		return $query->result_array();		
	}
	
	function get_info($kode_kegiatan){
		$query = $this->db->query('select a.nama_kegiatan, b.nama_indikator_keg, format(c.pagu_perubahan,0) as pagu_perubahan
									from tb_kegiatan a, tb_indikator_kegiatan b, tb_ev_tgt_keg c 
									where a.kode_kegiatan=b.kode_kegiatan 
									and b.kode_kegiatan= c.kode_kegiatan 
									and a.kode_kegiatan="'.$kode_kegiatan.'"');
		return $query->result_array();		
	}
	
	
	function get_indikator($kode_kegiatan){
		$query = $this->db->query('select nama_indikator_keg, satuan from tb_indikator_kegiatan where kode_kegiatan="'.$kode_kegiatan.'"');
		return $query->result_array();		
	}
	
	function input_data($table,$data){
		$this->db->insert($table,$data);
        return $this->db->insert_id();
	}
}
