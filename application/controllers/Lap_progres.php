<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lap_progres extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        $this->load->library('parser');
        $this->load->library('session');
		$this->load->model('Lap_progres_model');
		
		
		if($this->session->userdata('status') != "login"){
			redirect('login/login');
		}
    }
	
	public function index(){	
		$unit = $_SESSION['id_unit'];
		$data['sub_unit']= $this->Lap_progres_model->get_sub_unit($unit);
		$data['content'] = $this->load->view('Lap_progres_view', $data ,true);
        $this->parser->parse('template/backend', $data);
	}
	
	function get_data_content(){
		$unit = $_POST['unit'];
		$url_1 = 'http://negaraapi.madiunkota.go.id:8888/v_bl/109';
		$json = file_get_contents($url_1);
		$data_json = json_decode($json, TRUE);
		
		$data = $data_json["data"];
		$jml_arr = count($data);
		$arr_result = array();
		
		for ($i=0; $i < $jml_arr; $i++) {
            if($data[$i]["id_sub_skpd"] == $unit){
					array_push($arr_result, $data[$i]);
				
            }
        }
		
		$output='';
		$output.='<table id="tb_prog" class="table table-bordered table-striped">
					<thead bgcolor="#5d80a3">
						<tr style="color: #fff;">
						  <th>No</th>
						  <th>Bidang/Program/Kegiatan/SubKegiatan</th>
						  <th>Target</th>
						  <th>Realisasi</th>
						  <th>Capaian</th>
						  <th>Keterangan</th>
						</tr>
					</thead>
					<tbody>
					<tr><td colspan="6">'.$arr_result[0]['nama_bidang_urusan'].'</td></tr>
					';
		$x=1;
				foreach($arr_result as $k=>$v){
					$output.='
						<tr>
							<td>'.$x.'</td>
							<td>'.$v['nama_program'].'</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td></td>
							<td> Kegiatan : '.$v['nama_giat'].'</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td></td>
							<td>Sub Kegiatan : '.$v['nama_sub_giat'].'</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
					';
					$x++;
				}
		$output.='</tbody>
				</table>';
		echo $output;
	}
	
	/*function get_data_content(){
		$unit = $_POST['unit'];
		$url = 'http://negaraapi.madiunkota.go.id:8888/v_renstra/109/2019/2024/'.$unit.'';
		$json = file_get_contents($url);
		$data_json = json_decode($json, TRUE);
		$jml_arr = count($data_json["data"]);
		$data = $data_json['data']; 
		//print_r($data);die;
		$output='';
		$output.='<table id="tb_prog" class="table table-bordered table-striped">
					<thead bgcolor="#5d80a3">
						<tr style="color: #fff;">
						  <th>No</th>
						  <th>Bidang/Program/Kegiatan/SubKegiatan</th>
						  <th>Target</th>
						  <th>Realisasi</th>
						  <th>Capaian</th>
						  <th>Keterangan</th>
						</tr>
					</thead>
					<tbody>
					<tr><td colspan="6">'.$data[0]['nama_bidang_urusan'].'</td></tr>
					';
			//$no = count(array_keys($data)); //3
			$x=1;
				foreach($data as $k=>$v){
					$output.='
						<tr>
							<td>'.$x.'</td>
							<td>'.$v['nama_program'].'</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td></td>
							<td> Kegiatan : '.$v['nama_giat'].'</td>
							<td>'.$v['target_2'].' '.$v['satuan'].'</td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td></td>
							<td>Sub Kegiatan : '.$v['nama_sub_giat'].'</td>
							<td>'.$v['target_sub_2'].' '.$v['satuan_sub'].' </td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
					';
					$x++;
				}
		$output.='</tbody>
				</table>';
		echo $output;
		
	}*/
	
		
}
