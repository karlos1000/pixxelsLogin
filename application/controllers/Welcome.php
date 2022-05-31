<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->load->model('login_model');
	}

	public function index()
	{
		$this->session->set_userdata("title", "Iniciar sesi&oacute;n");
		$this->load->view('login');
	}

	public function checkLogin()
	{
		$msg = array('msgError'=>"Usuario inv&aacute;lido", 'login'=>false);
		$formData = array(
			"email"=>$this->input->post("email"),
			"password"=>$this->input->post("password"),
		);

		// Comprobar que el usuario exista en base de datos
		$result = $this->login_model->login($formData);
		if($result){
			$this->session->set_userdata("user_data", $result);
			$this->load->view('administrator');
		}else{
			$this->session->set_flashdata('message', $msg);
			redirect('/welcome');
		}
		// echo "<pre>";
		// print_r($result);
		// echo "</pre>";
	}
}
