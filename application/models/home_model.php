<?php

class Home_model extends CI_Model {

	
    function __construct()
    {
    	parent::__construct();
    }


    function get_category_list(){
      $this->db->select('id, name');
      $this->db->where('active', 1);
      $this->db->order_by("name", "asc"); 
      $this->db->from('tbl_main_categories'); 
      $query = $this->db->get();
      $result = $query->result();
      return $result;
    }


    function get_language_list(){
      $this->db->select('id, name');
      $this->db->where('status', 1);
      $this->db->order_by("name", "asc"); 
      $this->db->from('tbl_language_list'); 
      $query = $this->db->get();
      $result = $query->result();
      return $result;
    }

    function get_country_list(){

      $this->db->select('id, name');
      $this->db->where('status', 1);
      $this->db->order_by("name", "asc"); 
      $this->db->from('tbl_counties_list'); 
      $query = $this->db->get();
      $result = $query->result();
      return $result;
    }


    function add_image($image){
         $imagdata['user_id']           =$image['user_id'];
         $imagdata['user_name']         =$image['username'];
         $imagdata['title']             =$image['title'];
         $imagdata['image']             =$image['image'];
         $imagdata['description']       =$image['description'];
         $imagdata['image_size']        =$image['image_size'];
         $imagdata['user_country_id']   =$image['user_country_id'];
         $imagdata['language_id']       =$image['language_id'];
         $imagdata['category_id']       =$image['category_id'];
         $imagdata['upload_date']       =date('Y-m-d');
         $imagdata['time']              =time();
         $imagdata['views']             =0;
         $imagdata['status']            =0;

         $results = $this->db->insert('tbl_images', $imagdata); 
         return $results;
    }


    function get_most_recent_images(){

        $config['base_url'] = 'http://localhost/lol_corps/home/most_recent/';

        $this->db->select('id');
        $this->db->from('tbl_images');
        $this->db->where('status', 1);
        $query_res = $this->db->get();
        $config['total_rows'] =  $query_res->num_rows();
        $config['per_page'] = 20;
        $config['uri_segment'] = 3;

        $this->pagination->initialize($config);
        // $this->db->select('id, title, image, category_id, views');
        // $this->db->where('status', 1);
        // $this->db->order_by("id", "desc"); 
        // $pag = $this->db->get('tbl_images', $config['per_page'], $this->uri->segment(3));        
        // $resultset = $pag->result();


        $this->db->select('tbl_images.id, tbl_images.title, tbl_images.image, tbl_images.category_id, tbl_images.views, tbl_main_categories.name');
        $this->db->from('tbl_images');
        $this->db->join('tbl_main_categories','tbl_images.category_id=tbl_main_categories.id');
        $this->db->where('tbl_images.status', 1);
        $this->db->order_by("id", 'RANDOM');
        //$this->db->order_by("id", "desc"); 
        $this->db->limit($config['per_page'], $this->uri->segment(3));
        $pag = $this->db->get();        
        $resultset = $pag->result();

        return $resultset;
    }


    function get_most_popular_images(){


        $config['base_url'] = 'http://localhost/lol_corps/home/most_popular/';
        $this->db->select('id');
        $this->db->from('tbl_images');
        $this->db->where('status', 1);
        $query_res = $this->db->get();
        $config['total_rows'] =  $query_res->num_rows();
        $config['per_page'] = 20;
        $config['uri_segment'] = 3;
        $config['cur_tag_open'] = '<a href="#">';
        $config['cur_tag_close'] = '</a>';
        //current page
        $config['cur_tag_open'] = '<a href="#">';
        $config['cur_tag_close'] = '</a>';

        $this->pagination->initialize($config);


        $this->db->select('tbl_images.id, tbl_images.title, tbl_images.image, tbl_images.category_id, tbl_images.views, tbl_main_categories.name');
        $this->db->from('tbl_images');
        $this->db->join('tbl_main_categories','tbl_images.category_id=tbl_main_categories.id');
        $this->db->where('tbl_images.status', 1);
        $this->db->order_by("views", "desc"); 
        $this->db->limit($config['per_page'], $this->uri->segment(3));
        $pag = $this->db->get();        
        $resultset = $pag->result();

        return $resultset;
   

    }



    function add_one_to_category($id){
      
      $this->db->select('total');
      $this->db->from('tbl_main_categories');
      $this->db->where('id', $id);
      $pag = $this->db->get();        
      $resultset = $pag->result();

      $newvalue =  $resultset[0]->total+1;

      $data = array('total' => $newvalue);
      $this->db->where('id', $id);
      $this->db->update('tbl_main_categories', $data); 
     }








}

?>