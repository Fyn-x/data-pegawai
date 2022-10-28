<?php 
  class Employee_model extends CI_Model{
    public function getData()
    {
      return $this->db->get('employees')->result();
    }

    public function getDataByNip($nip)
    {
      return $this->db->get_where('employees', ['nip'=>$nip])->row();
      
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

    public function delete($nip)
    {
      $this->db->where('nip', $nip);
      $this->db->delete('employees');
    }

    public function edit($nip)
    {
      $data = [
        'nama'=>$this->input->post('nama', true),
        'email'=>$this->input->post('email', true),
        'nip'=>$this->input->post('nip', true),
        'keterangan'=>$this->input->post('keterangan', true),
      ];

      $this->db->where('nip', $nip);
      $this->db->update('employees', $data);
    }
  }
?>