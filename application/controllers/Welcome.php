<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct() 
	{
		parent::__construct();
		$this->load->model('Employees');
  }

	public function index()
	{
		$data = $this->Employees->getData();
		$employees = array('datas'=>$data);

		$this->load->view('templates/header');
		$this->load->view('index', $employees);
		$this->load->view('templates/footer');
	}

	public function addEmployee()
	{
		$this->load->view('templates/header');
		$this->load->view('add_employee');
		$this->load->view('templates/footer');
	}

	public function storeEmployee()
	{
		$nip = $this->input->post('nip');
		$nama = $this->input->post('nama');
		$email = $this->input->post('email');
		$keterangan = $this->input->post('keterangan');
		echo $nama;
		$data = array(
			'nip'=>$nip,
			'nama'=>$nama,
			'email'=>$email,
			'keterangan'=>$keterangan,
		);
	}
}
