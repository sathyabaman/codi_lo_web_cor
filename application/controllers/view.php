<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class View extends CI_Controller {


    function __construct() {
        parent::__construct();
      
      //session, url, satabase is set in auto load in the config
      
        $this->load->model('view_image_model', 'view_image');
        $this->load->library('pagination');
    }


    function index($id=10){
    
        redirect('category/');
    }


    function image(){
        $image_id =  $this->uri->segment(3);

        if($image_id){
        $this->view_image->add_one_to_view_image($image_id);

        $data['img_details'] = $this->view_image->get_image_details($image_id);
        $data['top_categry'] = $this->view_image->get_top_categories();
        $data['u_may_like']  = $this->view_image->get_you_may_like($image_id);
        $data['next_image']  = $this->view_image->get_next_image($image_id);
        $data['previous_image']  = $this->view_image->get_previous_image($image_id);
        

        if ($data['img_details']) {
            $this->load->view('view_image', $data);
        }else{
            redirect('category/');
        }
           
        
        }else{

            redirect('category/');
        }
    }


}
?>