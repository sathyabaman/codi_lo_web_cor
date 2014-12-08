<?php

class Category_model extends CI_Model {

	
    function __construct()
    {
    	parent::__construct();
    }


    function get_all_categories(){
      $this->db->select('id, name, image, url_name, total');
      $this->db->where('active', 1);
      $this->db->order_by("total", "desc"); 
      $this->db->from('tbl_main_categories'); 
      $query = $this->db->get();
      $result = $query->result();
      return $result;
    }


    function get_single_category($id){

      // total records
      $this->db->select('id');
      $this->db->from('tbl_images');
      $this->db->where('category_id', $id);
      $query_res = $this->db->get();
      $no_of_records = $query_res->num_rows();

      //get url name
      $this->db->select('url_name');
      $this->db->from('tbl_main_categories');
      $this->db->where('id', $id);
      $pag = $this->db->get();        
      $resultset = $pag->result();

      $name =  $resultset[0]->url_name;

      $config['base_url'] = "http://localhost/lol_corps/category/".$name."/";
      $config['total_rows'] = $no_of_records;
      $config['per_page'] = 20;
      $config['uri_segment'] = 3;
      
      $this->pagination->initialize($config);

      $this->db->select('tbl_images.id, tbl_images.title, tbl_images.image, tbl_images.category_id, tbl_images.views, tbl_main_categories.name');
      $this->db->from('tbl_images');
      $this->db->join('tbl_main_categories','tbl_images.category_id=tbl_main_categories.id');
      $this->db->where('tbl_images.category_id', $id);
      $this->db->where('tbl_images.status', 1);
      $this->db->order_by("id", "desc"); 
      $this->db->limit($config['per_page'], $this->uri->segment(3));
      $pag = $this->db->get();        
      $resultset = $pag->result();

      return $resultset;
    }

    function get_single_category_name($id){
      $this->db->select('name');
      $this->db->from('tbl_main_categories');
      $this->db->where('id', $id);
      $pag = $this->db->get();        
      $resultset = $pag->result();

      return $resultset;
    }


}

?>