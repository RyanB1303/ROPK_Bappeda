<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        $this->load->library('parser');
        $this->load->library('session');
		
        $this->sess_id = $this->session->userdata('user_id');
    }
	
	public function index()
	{
        redirect('login/login');
	}
	
	function login()
    {	
        if(!empty($this->sess_id)) {
            redirect('dashboard');
        }
        
        $data = array();
        $this->parser->parse('template/login', $data);
    }
	
	function set_login()
    {		
		$this->load->model('login_model');
		$username = $this->input->post('username');
		$pass = $this->input->post('password');
		$data = array();
		$data = $this->login_model->login($username,$pass);
		$cek = $data[0]['id_unit'];
		$nama = $data[0]['nama'];
		if(!empty($cek)){
			$data_session = array(
				'username' => $username,
				'id_unit' => $cek,
				'nama' => $nama,
				'status' => "login",
				);
			$this->session->set_userdata($data_session);
 
			redirect('dashboard');
 
		}else{
			redirect('login/login');
		}
    }
	
	function logout() 
	{
        $this->session->sess_destroy();
        redirect('/');
    }
	
}
