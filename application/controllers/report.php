<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Report extends CI_Controller {


    function __construct() {
        parent::__construct();
      
      //session, url, satabase is set in auto load in the config
      
        $this->load->model('image_report_model', 'image_report');
        $this->load->library('pagination');
    }


    function index($id=10){
    
        redirect('category/');
    }


    function image(){
        $image =  $this->uri->segment(3);
        $image_id = base64_decode($image);
       
        $data['img_details'] = $this->image_report->get_image($image_id);
        $data['category'] = $this->image_report->get_report_category_list();
        $this->load->view('report_image', $data);
    }




   function image_report() {

        
        $report['category_id'] =$this->input->post('category');
        $report['image_id'] =$this->input->post('image_id');
        $encode_image = base64_encode($report['image_id']);

        if($report['category_id']==0){
            $message = "Please Select a category.";
            $this->session->set_userdata('error_message', $message);
            redirect('/report/image/'.$encode_image);
        }else{
             
            $report['description'] =$this->input->post('description');
            $report['image_id'] =$this->input->post('image_id');
         

             
           $result = $this->image_report->insert_into_report_table($report);

             $message = "Thank you!... <br/>We will take action as soon as possible.";
             $this->session->set_userdata('sucess_message', $message);
             redirect('/report/image/'.$encode_image);
        }

     }
        




}
?>