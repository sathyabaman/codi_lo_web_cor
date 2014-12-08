<?php

class view_image_model extends CI_Model {

	
    function __construct()
    {
    	parent::__construct();
    }


    function add_one_to_view_image($id){
      
      $this->db->select('views');
      $this->db->from('tbl_images');
      $this->db->where('id', $id);
      $pag = $this->db->get();        
      $resultset = $pag->result();

      $newvalue = ($resultset[0]->views) + 1;

      $data = array('views' => $newvalue);
      $this->db->where('id', $id);
      $this->db->update('tbl_images', $data); 
     }


     function get_image_details($id){

        $this->db->select('tbl_images.id, tbl_images.title, tbl_images.user_name, 
          tbl_images.image, tbl_images.category_id, tbl_images.views, tbl_images.description, 
          tbl_main_categories.name, tbl_counties_list.name as country');
        $this->db->from('tbl_images');
        $this->db->join('tbl_main_categories','tbl_images.category_id=tbl_main_categories.id');
        $this->db->join('tbl_counties_list','tbl_images.user_country_id=tbl_counties_list.id');
        $this->db->where('tbl_images.id', $id);
        $this->db->limit(1);
        $pag = $this->db->get();        
        $resultset = $pag->result();

        return $resultset;
     }

     function get_next_image($id){
        $next_image = $id-1;
        $this->db->select('id, title');
        $this->db->from('tbl_images');
        $this->db->where('tbl_images.id', $next_image);
        $this->db->limit(1);
        $pag = $this->db->get();        
        $resultset = $pag->result();
        return $resultset;
     }

     function get_previous_image($id){
        $next_image = $id+1;
        $this->db->select('id, title');
        $this->db->from('tbl_images');
        $this->db->where('tbl_images.id', $next_image);
        $this->db->limit(1);
        $pag = $this->db->get();        
        $resultset = $pag->result();
        return $resultset;
     }

     function get_top_categories(){

        $this->db->select('name, url_name, total');
        $this->db->from('tbl_main_categories');
        $this->db->where('active', 1);
        $this->db->order_by("total", "desc"); 
        $this->db->limit(15);
        $pag = $this->db->get();        
        $resultset = $pag->result();

        return $resultset;

     }


     function get_you_may_like($id){
          $this->db->select('category_id');
          $this->db->from('tbl_images');
          $this->db->where('id', $id);
          $pag = $this->db->get();        
          $resultset = $pag->result();

          $categoryid = $resultset[0]->category_id;

          $this->db->select('tbl_images.id, tbl_images.title, tbl_images.image, 
            tbl_images.category_id, tbl_images.views, tbl_images.status, tbl_main_categories.name');
          $this->db->from('tbl_images');
          $this->db->join('tbl_main_categories','tbl_images.category_id=tbl_main_categories.id');
          $this->db->where('tbl_images.category_id', $categoryid);
          $this->db->where('tbl_images.status', 1);
          $this->db->order_by("id", 'RANDOM'); 
          $this->db->limit(4);
          $pag = $this->db->get();        
          $resultset = $pag->result();

          return $resultset;
     }





}

?>