<?php 
  class Employee_model extends CI_Model{
    public function getData()
    {
      return $this->db->get('employees')->result();
    }

    public function add()
    {
      $data = [
        'nama'=>$this->input->post('nama', true),
        'nip'=>$this->input->post('nip', true),
        'email'=>$this->input->post('email', true),
        'keterangan'=>$this->input->post('keterangan', true),
      ];

      $this->db->insert('employees', $data);
    }
  }
?>