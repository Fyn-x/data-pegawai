<?php 
  class Item extends CI_Controller{

    public function __construct() {
      parent::__construct();
      $this->load->database();
   }

   public function index()
   {
      $this->load->view('index');
   }

   public function get_items()
   {
      $draw = intval($this->input->get("draw"));
      $start = intval($this->input->get("start"));
      $length = intval($this->input->get("length"));
      $query = $this->db->get("items");
      $data = [];
      foreach($query->result() as $r) {
           $data[] = array(
                $r->id,
                $r->title,
                $r->description
           );
      }
      $result = array(
               "draw" => $draw,
                 "recordsTotal" => $query->num_rows(),
                 "recordsFiltered" => $query->num_rows(),
                 "data" => $data
            );
      echo json_encode($result);
      exit();
   }
  }
?>