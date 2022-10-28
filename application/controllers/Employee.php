<?php  
  class Employee extends CI_Controller{
    public function __construct() 
    {
      parent::__construct();
      $this->load->model('Employee_model');
      $this->load->library('form_validation');
    }
  
    public function index()
    {
      $data['employee'] = $this->Employee_model->getData();
  
      $this->load->view('templates/header');
      $this->load->view('employee/index', $data);
      $this->load->view('templates/footer');
    }

    public function add()
    {
      $this->form_validation->set_rules('nama', 'Nama', 'required');
      $this->form_validation->set_rules('nip', 'NIP', 'required|is_unique[employees.nip]');
      $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[employees.email]');
      $this->form_validation->set_rules('keterangan', 'Keterangan', 'required');

      if($this->form_validation->run()==false) {
        $this->load->view('templates/header');
        $this->load->view('employee/add_employee');
        $this->load->view('templates/footer');
      }else{
        $this->Employee_model->add();
        $this->session->set_flashdata('flash', 'Ditambahkan');
        redirect('employee');
      }
    }

    public function delete($nip)
    {
      $this->Employee_model->delete($nip);
      $this->session->set_flashdata('flash', 'Dihapus');
      redirect('employee');
    }

    public function edit($nip)
    {
      $data['employee'] = $this->Employee_model->getDataByNip($nip);
      
      if ($this->input->post('email')!==$data['employee']->email) {
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[employees.email]');
      }

      if ($this->input->post('nip')!==$data['employee']->nip) {
        $this->form_validation->set_rules('nip', 'NIP', 'is_unique[employees.nip]');
      }

      $this->form_validation->set_rules('nama', 'Nama', 'required');
      $this->form_validation->set_rules('keterangan', 'Keterangan', 'required');

      if ($this->form_validation->run()==false) {
        $this->load->view('templates/header');
        $this->load->view('employee/edit_employee', $data);
        $this->load->view('templates/footer');
      }else{
        $this->Employee_model->edit($nip);
        $this->session->set_flashdata('flash', 'Diupdate');
        redirect('employee');
      }

    }
  }

?>