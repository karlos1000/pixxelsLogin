<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function index(){
	}

	// Revisa el logueo del usuario
	public function login($params=array()){
		$array = array();
		$this->db->where($params);
		$this->db->select('*');
		$query = $this->db->get('users');

		if( $query->num_rows() > 0 ){
			$array = $query->result();
		}

		return $array;
	}

}