<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kegiatan extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        $this->load->library('parser');
        $this->load->library('session');
		$this->load->model('Kegiatan_model');
				
		if($this->session->userdata('status') != "login"){
			redirect('login/login');
		}
    }
	
	public function index(){		
		
		$unit = $_SESSION['id_unit'];
		$url = 'http://negaraapi.madiunkota.go.id:8888/v_renstra/109/2019/2024/'.$unit.'';
		$json = file_get_contents($url);
		$data = json_decode($json, TRUE);
		/*$jml_arr = count($data_json["data"]); //jumlah data array = 2014 index
		$content = array();
		for ($i=0; $i < $jml_arr; $i++) {
            if($data_json["data"][$i]["id_sub_skpd"] == $unit){
				$content["data_content"][$i] = $data_json["data"][$i];
           }
        }
		$data = $content;
		//print_r($data);die;*/
		$data['content'] = $this->load->view('Kegiatan_view', $data,true);
		$this->parser->parse('template/backend', $data);
	}
	
}
