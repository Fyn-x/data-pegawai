<?php 
  class Employees extends CI_Model{
    public function getData()
    {
      # code...
      $this->db->select('*');
      $this->db->from('employees');
      $query = $this->db->get();

      return $query->result();
    }
  }
?>