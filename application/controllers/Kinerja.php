<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kinerja extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        $this->load->library('parser');
        $this->load->library('session');
		$this->load->model('Kinerja_model');
		
		
		if($this->session->userdata('status') != "login"){
			redirect('login/login');
		}
    }
	
	public function index(){	
		$unit = $_SESSION['id_unit'];
		$data['sub_unit']= $this->Kinerja_model->get_sub_unit($unit);
		$data['content'] = $this->load->view('Kinerja_vw', $data ,true);
        $this->parser->parse('template/backend', $data);
	}
	
	function get_data_content(){
		$unit = $_POST['unit'];
		$url = 'http://negaraapi.madiunkota.go.id:8888/v_renstra/109/2019/2024/'.$unit.'';
		$json = file_get_contents($url);
		$data_json = json_decode($json, TRUE);
		$data = $data_json['data'];
		
		$output='';
		$output.='<table id="tb_prog" class="table table-bordered table-striped">
					<thead bgcolor="#5d80a3">
						<tr style="color: #fff;">
						  <th>No</th>
						  <th>Kode</th>
						  <th>Bidang/Program/Kegiatan/SubKegiatan</th>
						  <th>Pagu Anggaran</th>
						  <th>Pilihan</th>
						  <th>
							<button type="button" class="btn btn-warning"><i class="fa fa-lock"></i></button>
							<button type="button" class="btn btn-danger"><i class="fa fa-unlock"></i></button>
						  </th>
						</tr>
					</thead>
					<tbody>';
		//$arr = array();
			if(!empty($data)){
				$x=1;
				foreach($data as $k=>$v){
					$output.='
						<tr style="color: #fff;">
							<td rowspan="4" bgcolor="#3793de">'.$x.'</td>
							<td bgcolor="#3793de">'.$v['kode_bidang_urusan'].'</td>
							<td bgcolor="#3793de" colspan="4">'.$v['nama_bidang_urusan'].'</td>
						</tr>
						<tr style="color: #fff;">
							<td bgcolor="#3793de">'. $v['kode_program'].'</td>
							<td bgcolor="#3793de" colspan="4">'.$v['nama_program'].'</td>
						</tr>
						<tr>
							<td>'.$v['kode_giat'].'</td>
							<td>'.$v['nama_giat'].'</td>
							<td colspan="3">'.number_format($v['pagu_2'], 0, ",", ".").'</td>
						</tr>
						<tr>
							<td>'.$v['kode_sub_giat'].'</td>
							<td>'.$v['nama_sub_giat'].'</td>
							<td>'.number_format($v['pagu_sub_2'], 0, ",", ".").'</td>
							<td align="center">
								<a href="kinerja/perencanaan/'.$v['kode_sub_giat'].'"><button type="button" class="btn btn-success">Perencanaan</button></a>
								<a href="#"><button type="button" class="btn btn-info">Realisasi</button></a>
							</td>
							<td align="center"><button type="button" class="btn btn-danger"><i class="fa fa-unlock"></i></button></td>
						</tr>
						';
					$x++;
				}
			}else{
				$output.='<tr>
							<td colspan="6" align="center">no data available!</td>
						</tr>';
			}							
		$output.='</tbody>
				</table>';
		echo $output;
		
	}
	
	function perencanaan($id){
		$kode_kegiatan = $this->uri->segment('3');;
		$data['bulan'] = $this->Kinerja_model->get_bulan();
		$data_view['content']= $this->load->view('perencanaan_vw', $data, true);
        $this->parser->parse('template/backend', $data_view);

	}
	
	function simpan_perencanaan(){
		$kode_perencanaan = $_POST['kode_perencanaan'];
		$indikator = $_POST['indikator'];
		$kalkulasi = $_POST['kalkulasi'];
		//januari
		$jan_w1 = $_POST['jan_w1'];
		$jan_w2 = $_POST['jan_w2'];
		$jan_w3 = $_POST['jan_w3'];
		$jan_w4 = $_POST['jan_w4'];
		//februari
		$feb_w1 = $_POST['feb_w1'];
		$feb_w2 = $_POST['feb_w2'];
		$feb_w3 = $_POST['feb_w3'];
		$feb_w4 = $_POST['feb_w4'];
		//maret
		$mar_w1 = $_POST['mar_w1'];
		$mar_w2 = $_POST['mar_w2'];
		$mar_w3 = $_POST['mar_w3'];
		$mar_w4 = $_POST['mar_w4'];
		//april
		$apr_w1 = $_POST['apr_w1'];
		$apr_w2 = $_POST['apr_w2'];
		$apr_w3 = $_POST['apr_w3'];
		$apr_w4 = $_POST['apr_w4'];
		//mei
		$mei_w1 = $_POST['mei_w1'];
		$mei_w2 = $_POST['mei_w2'];
		$mei_w3 = $_POST['mei_w3'];
		$mei_w4 = $_POST['mei_w4'];
		//juni
		$jun_w1 = $_POST['jun_w1'];
		$jun_w2 = $_POST['jun_w2'];
		$jun_w3 = $_POST['jun_w3'];
		$jun_w4 = $_POST['jun_w4'];
		//juli
		$jul_w1 = $_POST['jul_w1'];
		$jul_w2 = $_POST['jul_w2'];
		$jul_w3 = $_POST['jul_w3'];
		$jul_w4 = $_POST['jul_w4'];
		//agustus
		$agt_w1 = $_POST['agt_w1'];
		$agt_w2 = $_POST['agt_w2'];
		$agt_w3 = $_POST['agt_w3'];
		$agt_w4 = $_POST['agt_w4'];
		//september
		$sep_w1 = $_POST['sep_w1'];
		$sep_w2 = $_POST['sep_w2'];
		$sep_w3 = $_POST['sep_w3'];
		$sep_w4 = $_POST['sep_w4'];
		//oktober
		$okt_w1 = $_POST['okt_w1'];
		$okt_w2 = $_POST['okt_w2'];
		$okt_w3 = $_POST['okt_w3'];
		$okt_w4 = $_POST['okt_w4'];
		//november
		$nov_w1 = $_POST['nov_w1'];
		$nov_w2 = $_POST['nov_w2'];
		$nov_w3 = $_POST['nov_w3'];
		$nov_w4 = $_POST['nov_w4'];
		//desember
		$des_w1 = $_POST['des_w1'];
		$des_w2 = $_POST['des_w2'];
		$des_w3 = $_POST['des_w3'];
		$des_w4 = $_POST['des_w4'];

		$data = array(
			"kode_perencanaan"=>$kode_perencanaan,
			"nama_aktivitas"=> $indikator,
			"total_kalkulasi"=> $kalkulasi,
			"jan_w1"=> $jan_w1,
			"jan_w2"=> $jan_w2,
			"jan_w3"=> $jan_w3,
			"jan_w4"=> $jan_w4,
			"feb_w1"=> $feb_w1,
			"feb_w2"=> $feb_w2,
			"feb_w3"=> $feb_w3,
			"feb_w4"=> $feb_w4,
			"mar_w1"=> $mar_w1,
			"mar_w2"=> $mar_w2,
			"mar_w3"=> $mar_w3,
			"mar_w4"=> $mar_w4,
			"apr_w1"=> $apr_w1,
			"apr_w2"=> $apr_w2,
			"apr_w3"=> $apr_w3,
			"apr_w4"=> $apr_w4,
			"mei_w1"=> $mei_w1,
			"mei_w2"=> $mei_w2,
			"mei_w3"=> $mei_w3,
			"mei_w4"=> $mei_w4,
			"jun_w1"=> $jun_w1,
			"jun_w2"=> $jun_w2,
			"jun_w3"=> $jun_w3,
			"jun_w4"=> $jun_w4,
			"jul_w1"=> $jul_w1,
			"jul_w2"=> $jul_w2,
			"jul_w3"=> $jul_w3,
			"jul_w4"=> $jul_w4,
			"agt_w1"=> $agt_w1,
			"agt_w2"=> $agt_w2,
			"agt_w3"=> $agt_w3,
			"agt_w4"=> $agt_w4,
			"sep_w1"=> $sep_w1,
			"sep_w2"=> $sep_w2,
			"sep_w3"=> $sep_w3,
			"sep_w4"=> $sep_w4,
			"okt_w1"=> $okt_w1,
			"okt_w2"=> $okt_w2,
			"okt_w3"=> $okt_w3,
			"okt_w4"=> $okt_w4,
			"nov_w1"=> $nov_w1,
			"nov_w2"=> $nov_w2,
			"nov_w3"=> $nov_w3,
			"nov_w4"=> $nov_w4,
			"des_w1"=> $des_w1,
			"des_w2"=> $des_w2,
			"des_w3"=> $des_w3,
			"des_w4"=> $des_w4			
		);
		//print_r($data);die;
		$data_input = $this->Kinerja_model->input_data('tb_perencanaan',$data);
		
		if($data_input>0){
				echo "Sukses menyimpan data";
				redirect('kinerja');
		}
		else{
				echo "Gagal menyimpan data";
				redirect('kinerja');
		}	
	}
		
}
