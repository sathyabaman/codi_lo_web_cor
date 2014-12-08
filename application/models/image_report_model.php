<?php

class image_report_model extends CI_Model {

	
    function __construct()
    {
    	parent::__construct();
    }


    function get_image($id){

        $this->db->select('id, title, image');
        $this->db->from('tbl_images');
        $this->db->where('id', $id);
        $this->db->limit(1);
        $pag = $this->db->get();        
        $resultset = $pag->result();

        return $resultset;
    }


    function get_report_category_list(){
      $this->db->select('id, name');
      $this->db->where('status', 1);
      $this->db->order_by("name", "asc"); 
      $this->db->from('tbl_report_category_list'); 
      $query = $this->db->get();
      $result = $query->result();
      return $result;
    }

    function insert_into_report_table($report){

     $imagdata['imageid']          =$report['image_id'];
     $imagdata['category']         =$report['category_id'];
     $imagdata['description']      =$report['description'];
     $imagdata['action_taken']     =0;

     $results = $this->db->insert('tbl_image_reports', $imagdata); 
     return $results;

    }




}

?>