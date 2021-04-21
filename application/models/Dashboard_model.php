<?php 

class Dashboard_model extends CI_Model {
	
	function get_sub_unit(){
		$this->db->select('*');
		$this->db->from('tbl_sub_unit');		
		$this->db->order_by('id_sub_unit','asc');		
		$query = $this->db->get();
		return $query->result_array();
	}
	
	/*function get_data_kinerja(){
		$this->db->select('nama_unit');
		$this->db->from('tb_unit');		
		$this->db->order_by('nama_unit','asc');		
		$query = $this->db->get();
		return $query->result_array();
	}
	
	function get_data_keuangan(){
		$this->db->select('nama_unit');
		$this->db->from('tb_unit');		
		$this->db->order_by('nama_unit','asc');		
		$query = $this->db->get();
		return $query->result_array();
	}
	
	//target kegiatan dan keuangan bulan ini
	function get_kegiatan($subunit,$month){
		if($month =='01'){
			$query = $this->db->query('SELECT a.kode_unit, a.nama_kegiatan, b.TA_bl_1 as target_keuangan from tb_kegiatan a, tb_ev_tgt_keg b 
									where a.kode_kegiatan = b.kode_kegiatan and a.kode_unit = "'.$subunit.'"');
		}
		else if($month =='02'){
			$query = $this->db->query('SELECT a.kode_unit, a.nama_kegiatan, b.TA_bl_2 as target_keuangan from tb_kegiatan a, tb_ev_tgt_keg b 
									where a.kode_kegiatan = b.kode_kegiatan and a.kode_unit = "'.$subunit.'"');
		}
		else if($month =='03'){
			$query = $this->db->query('SELECT a.kode_unit, a.nama_kegiatan, b.TA_bl_3 as target_keuangan from tb_kegiatan a, tb_ev_tgt_keg b 
									where a.kode_kegiatan = b.kode_kegiatan and a.kode_unit = "'.$subunit.'"');
		}
		else if($month =='03'){
			$query = $this->db->query('SELECT a.kode_unit, a.nama_kegiatan, b.TA_bl_3 as target_keuangan from tb_kegiatan a, tb_ev_tgt_keg b 
									where a.kode_kegiatan = b.kode_kegiatan and a.kode_unit = "'.$subunit.'"');
		}
		else if($month =='04'){
			$query = $this->db->query('SELECT a.kode_unit, a.nama_kegiatan, b.TA_bl_4 as target_keuangan from tb_kegiatan a, tb_ev_tgt_keg b 
									where a.kode_kegiatan = b.kode_kegiatan and a.kode_unit = "'.$subunit.'"');
		}
		else if($month =='05'){
			$query = $this->db->query('SELECT a.kode_unit, a.nama_kegiatan, b.TA_bl_5 as target_keuangan from tb_kegiatan a, tb_ev_tgt_keg b 
									where a.kode_kegiatan = b.kode_kegiatan and a.kode_unit = "'.$subunit.'"');
		}
		else if($month =='06'){
			$query = $this->db->query('SELECT a.kode_unit, a.nama_kegiatan, b.TA_bl_6 as target_keuangan from tb_kegiatan a, tb_ev_tgt_keg b 
									where a.kode_kegiatan = b.kode_kegiatan and a.kode_unit = "'.$subunit.'"');
		}
		else if($month =='07'){
			$query = $this->db->query('SELECT a.kode_unit, a.nama_kegiatan, b.TA_bl_7 as target_keuangan from tb_kegiatan a, tb_ev_tgt_keg b 
									where a.kode_kegiatan = b.kode_kegiatan and a.kode_unit = "'.$subunit.'"');
		}else if($month =='08'){
			$query = $this->db->query('SELECT a.kode_unit, a.nama_kegiatan, b.TA_bl_8 as target_keuangan from tb_kegiatan a, tb_ev_tgt_keg b 
									where a.kode_kegiatan = b.kode_kegiatan and a.kode_unit = "'.$subunit.'"');
		}else if($month =='09'){
			$query = $this->db->query('SELECT a.kode_unit, a.nama_kegiatan, b.TA_bl_9 as target_keuangan from tb_kegiatan a, tb_ev_tgt_keg b 
									where a.kode_kegiatan = b.kode_kegiatan and a.kode_unit = "'.$subunit.'"');
		}
		else if($month =='10'){
			$query = $this->db->query('SELECT a.kode_unit, a.nama_kegiatan, b.TA_bl_10 as target_keuangan from tb_kegiatan a, tb_ev_tgt_keg b 
									where a.kode_kegiatan = b.kode_kegiatan and a.kode_unit = "'.$subunit.'"');
		}
		else if($month =='11'){
			$query = $this->db->query('SELECT a.kode_unit, a.nama_kegiatan, b.TA_bl_11 as target_keuangan from tb_kegiatan a, tb_ev_tgt_keg b 
									where a.kode_kegiatan = b.kode_kegiatan and a.kode_unit = "'.$subunit.'"');
		}
		else if($month =='12'){
			$query = $this->db->query('SELECT a.kode_unit, a.nama_kegiatan, b.TA_bl_12 as target_keuangan from tb_kegiatan a, tb_ev_tgt_keg b 
									where a.kode_kegiatan = b.kode_kegiatan and a.kode_unit = "'.$subunit.'"');
		}
		return $query->result_array();	
	}
	function get_kegiatan($subunit){
        $this->db->select('*');
        $this->db->from('tb_kegiatan');
        $this->db->where('tb_kegiatan.kode_unit',$subunit);
		$query = $this->db->get();
        return $query;
    }*/
	
    
}
