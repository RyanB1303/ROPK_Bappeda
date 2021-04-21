<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        $this->load->library('parser');
        $this->load->library('session');
		$this->load->model('Dashboard_model');
		
		
		if($this->session->userdata('status') != "login"){
			redirect('login/login');
		}
    }
	
	public function index(){	
		$month = date('m');
		$data = array();
		$data['sub_unit'] = $this->Dashboard_model->get_sub_unit();
		//$data['kinerja'] = $this->Dashboard_model->get_data_kinerja();
		//$data['keuangan'] = $this->Dashboard_model->get_data_keuangan();
        $data['content'] = $this->load->view('dashboard_view',$data,true);
        $this->parser->parse('template/backend', $data);
	}
	
	/*function get_kegiatan(){
		$month = date('m');
		$subunit = $this->input->post('unit');
		$data = array();
        $data= $this->Dashboard_model->get_kegiatan($subunit,$month);
		//print_r($data);die;
		$output='';
		foreach($data as $k=>$v){
			  $output .= '
						<tr>
							<td>'.$v['nama_kegiatan'].'</td>
							<td></td>
							<td>'.number_format($v['target_keuangan'],0,",",",").'</td>
						</tr>
					'; 
			
		}
		echo $output;
	}*/
	
}
