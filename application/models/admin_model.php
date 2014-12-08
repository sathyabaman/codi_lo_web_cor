<?php

class Admin_model extends CI_Model {

	
    function __construct()
    {
    	parent::__construct();
    }



    function admin_login($user){

      $array = array('user_name' => $user['user'],
                     'passwrd' => $user['passwrd'],
                     'status' => 1);
      $this->db->select('id');
      $this->db->from('tbl_admin_users');
      $this->db->where($array);
      $query_res = $this->db->get();
      $no_of_records = $query_res->num_rows();
      return $no_of_records;

    }

    function set_login_session($user){

      $array = array('user_name' => $user['user'],
                     'passwrd' => $user['passwrd']);
      $this->db->select('id, user_name');
      $this->db->from('tbl_admin_users');
      $this->db->where($array);
      $query_res = $this->db->get();
      $results = $query_res->result();
      $this->session->set_userdata('is_loged_in', TRUE);
      $this->session->set_userdata('username', $results[0]->user_name);
      $this->session->set_userdata('userid', $results[0]->id);

    }
 

    function get_unapproved_images(){

      $this->db->select('tbl_images.id, tbl_images.title, tbl_images.image, tbl_images.user_name, tbl_images.user_country_id,
                         tbl_images.category_id, tbl_images.views, tbl_main_categories.name as category_name,
                         tbl_counties_list.name as country_name');
        $this->db->from('tbl_images');
        $this->db->join('tbl_main_categories','tbl_images.category_id=tbl_main_categories.id');
        $this->db->join('tbl_counties_list','tbl_images.user_country_id=tbl_counties_list.id');
        $this->db->where('tbl_images.status', 0);
        $query = $this->db->get();
      $result = $query->result();
      return $result;
    }

    function get_reported_images(){

      $this->db->select('tbl_images.id, tbl_images.title, tbl_images.image, tbl_images.user_name, tbl_images.user_country_id,
                         tbl_images.category_id, tbl_images.views');
        $this->db->from('tbl_images');
        $this->db->join('tbl_image_reports','tbl_images.id=tbl_image_reports.imageid');
        $this->db->where('tbl_image_reports.action_taken', 0);
        $query = $this->db->get();
      $result = $query->result();
      return $result;
    }

    function remove_reported_frm_admin($id){
      $data = array('action_taken' => 1);
      $this->db->where('imageid', $id);
      $this->db->update('tbl_image_reports', $data); 
    }



    function deactivate_report_image($id){
      $data = array('status' => 2);
      $this->db->where('id', $id);
      $this->db->update('tbl_images', $data); 

    }

     function delete_report_image($id){
      $data = array('status' => 3);
      $this->db->where('id', $id);
      $this->db->update('tbl_images', $data); 
    }








    function approve_image($id){
      $data = array('status' => 1);
      $this->db->where('id', $id);
      $this->db->update('tbl_images', $data); 
    }

     function deactivate_image($id){
      $data = array('status' => 2);
      $this->db->where('id', $id);
      $this->db->update('tbl_images', $data); 

    }

     function delete_image($id){
      $data = array('status' => 3);
      $this->db->where('id', $id);
      $this->db->update('tbl_images', $data); 
    }


    function session_log_out(){

      $this->session->unset_userdata('is_loged_in');
      $this->session->unset_userdata('username');
      $this->session->unset_userdata('userid');
    }

}

?>